<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Lib\ExtendedController\BaseView;
use FacturaScripts\Core\Lib\ExtendedController\ComercialContactController;
use FacturaScripts\Dinamic\Model\Agente;
use FacturaScripts\Dinamic\Model\TotalModel;

/**
 * Controller to edit a single item from the Agente model
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 * @author Artex Trading sa    <jcuello@artextrading.com>
 * @author Raul
 */
class EditAgente extends ComercialContactController
{

    /**
     * Returns the sum of the agent's total outstanding invoices.
     *
     * @return string
     */
    public function calcAgentInvoicePending(): string
    {
        $where = [
            new DataBaseWhere('codagente', $this->getViewModelValue($this->getMainViewName(), 'codagente')),
            new DataBaseWhere('pagada', false)
        ];

        $totalModel = TotalModel::all('facturascli', $where, ['total' => 'SUM(total)'], '')[0];
        return $this->toolBox()->coins()->format($totalModel->totals['total'], 2);
    }

    /**
     * Returns the class name of the model to use.
     *
     * @return string
     */
    public function getModelClassName(): string
    {
        return 'Agente';
    }

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'admin';
        $data['title'] = 'agent';
        $data['icon'] = 'fas fa-user-tie';
        return $data;
    }

    protected function createContactView(string $viewName = 'EditContacto')
    {
        $this->addEditView($viewName, 'Contacto', 'contact', 'fa fa-address-book');

        // disable columns
        $this->views[$viewName]->disableColumn('agent', true);
        $this->views[$viewName]->disableColumn('company', true);
        $this->views[$viewName]->disableColumn('fiscal-id', true);
        $this->views[$viewName]->disableColumn('fiscal-number', true);
        $this->views[$viewName]->disableColumn('position', true);

        // disable delete button
        $this->setSettings($viewName, 'btnDelete', false);
    }

    protected function createCustomerView(string $viewName = 'ListCliente')
    {
        $this->addListView($viewName, 'Cliente', 'customers', 'fas fa-users');
        $this->views[$viewName]->addOrderBy(['codcliente'], 'code');
        $this->views[$viewName]->addOrderBy(['nombre'], 'name', 1);
        $this->views[$viewName]->addSearchFields(['cifnif', 'codcliente', 'email', 'nombre', 'observaciones', 'razonsocial', 'telefono1', 'telefono2']);

        // disable buttons
        $this->setSettings($viewName, 'btnDelete', false);
        $this->setSettings($viewName, 'btnNew', false);
    }

    protected function createDocumentView(string $viewName, string $model, string $label)
    {
        $this->createCustomerListView($viewName, $model, $label);
        $this->addButtonGroupDocument($viewName);
        $this->addButtonApproveDocument($viewName);
    }

    protected function createEmailsView(string $viewName = 'ListEmailSent')
    {
        $this->addListView($viewName, 'EmailSent', 'emails-sent', 'fas fa-envelope');
        $this->views[$viewName]->addOrderBy(['date'], 'date', 2);
        $this->views[$viewName]->addSearchFields(['addressee', 'body', 'subject']);

        // disable column
        $this->views[$viewName]->disableColumn('to');

        // disable buttons
        $this->setSettings($viewName, 'btnNew', false);
    }

    protected function createInvoiceView(string $viewName)
    {
        $this->createCustomerListView($viewName, 'FacturaCliente', 'invoices');
        $this->addButtonLockInvoice($viewName);
    }

    /**
     * Load Views
     */
    protected function createViews()
    {
        parent::createViews();
        $this->createContactView();
        $this->createCustomerView();
        $this->createEmailsView();
        $this->createInvoiceView('ListFacturaCliente');
        $this->createDocumentView('ListAlbaranCliente', 'AlbaranCliente', 'delivery-notes');
        $this->createDocumentView('ListPedidoCliente', 'PedidoCliente', 'orders');
        $this->createDocumentView('ListPresupuestoCliente', 'PresupuestoCliente', 'estimations');
    }

    protected function editAction(): bool
    {
        $return = parent::editAction();
        if ($return && $this->active == 'EditContacto') {
            // update agent data when contact data is updated
            $agente = new Agente();
            $where = [new DataBaseWhere('idcontacto', $this->views[$this->active]->model->idcontacto)];
            if ($agente->loadFromCode('', $where)) {
                $agente->email = $this->views[$this->active]->model->email;
                $agente->telefono1 = $this->views[$this->active]->model->telefono1;
                $agente->telefono2 = $this->views[$this->active]->model->telefono2;
                $agente->save();
            }
        }

        return $return;
    }

    /**
     * Load view data procedure
     *
     * @param string $viewName
     * @param BaseView $view
     */
    protected function loadData($viewName, $view)
    {
        $mvn = $this->getMainViewName();

        switch ($viewName) {
            case 'EditContacto':
                $idcontacto = $this->getViewModelValue($mvn, 'idcontacto');
                if (empty($idcontacto)) {
                    $this->setSettings($viewName, 'active', false);
                    break;
                }
                $where = [new DataBaseWhere('idcontacto', $idcontacto)];
                $view->loadData('', $where);
                break;

            case 'ListAlbaranCliente':
            case 'ListCliente':
            case 'ListFacturaCliente':
            case 'ListPedidoCliente':
            case 'ListPresupuestoCliente':
                $codagente = $this->getViewModelValue($mvn, 'codagente');
                $where = [new DataBaseWhere('codagente', $codagente)];
                $view->loadData('', $where);
                break;

            case 'ListEmailSent':
                $email = $this->getViewModelValue($mvn, 'email');
                $where = [new DataBaseWhere('addressee', $email)];
                $view->loadData('', $where);
                $this->setSettings($viewName, 'active', $view->count > 0);
                break;

            case $mvn:
                parent::loadData($viewName, $view);
                if (false === $view->model->exists()) {
                    $view->disableColumn('contact');
                }
                break;
        }
    }

    protected function setCustomWidgetValues(string $viewName)
    {
        ;
    }
}
