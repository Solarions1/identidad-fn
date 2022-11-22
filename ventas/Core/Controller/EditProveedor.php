<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Lib\ExtendedController\BaseView;
use FacturaScripts\Core\Lib\ExtendedController\ComercialContactController;
use FacturaScripts\Dinamic\Lib\RegimenIVA;
use FacturaScripts\Dinamic\Lib\SupplierRiskTools;

/**
 * Controller to edit a single item from the Proveedor model
 *
 * @author Nazca Networks               <comercial@nazcanetworks.com>
 * @author Fco. Antonio Moreno Pérez    <famphuelva@gmail.com>
 * @author Carlos García Gómez          <carlos@facturascripts.com>
 */
class EditProveedor extends ComercialContactController
{

    /**
     * Returns the sum of the customer's total delivery notes.
     *
     * @return string
     */
    public function getDeliveryNotesRisk(): string
    {
        $codproveedor = $this->getViewModelValue('EditProveedor', 'codproveedor');
        $total = SupplierRiskTools::getDeliveryNotesRisk($codproveedor);
        return $this->toolBox()->coins()->format($total);
    }

    public function getImageUrl(): string
    {
        $mvn = $this->getMainViewName();
        return $this->views[$mvn]->model->gravatar();
    }

    /**
     * Returns the sum of the supplier's total outstanding invoices.
     *
     * @return string
     */
    public function getInvoicesRisk(): string
    {
        $codproveedor = $this->getViewModelValue('EditProveedor', 'codproveedor');
        $total = SupplierRiskTools::getInvoicesRisk($codproveedor);
        return $this->toolBox()->coins()->format($total);
    }

    public function getModelClassName(): string
    {
        return 'Proveedor';
    }

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'purchases';
        $data['title'] = 'supplier';
        $data['icon'] = 'fas fa-users';
        return $data;
    }

    protected function createDocumentView(string $viewName, string $model, string $label)
    {
        $this->createSupplierListView($viewName, $model, $label);
        $this->addButtonGroupDocument($viewName);
        $this->addButtonApproveDocument($viewName);
    }

    protected function createInvoiceView(string $viewName)
    {
        $this->createSupplierListView($viewName, 'FacturaProveedor', 'invoices');
        $this->addButtonLockInvoice($viewName);
    }

    protected function createProductView(string $viewName = 'ListProductoProveedor')
    {
        $this->addListView($viewName, 'ProductoProveedor', 'products', 'fas fa-cubes');
        $this->views[$viewName]->addOrderBy(['actualizado'], 'update-time', 2);
        $this->views[$viewName]->addOrderBy(['referencia'], 'reference');
        $this->views[$viewName]->addOrderBy(['refproveedor'], 'supplier-reference');
        $this->views[$viewName]->addOrderBy(['neto'], 'net');
        $this->views[$viewName]->addSearchFields(['referencia', 'refproveedor']);

        // disable columns
        $this->views[$viewName]->disableColumn('supplier');

        // disable buttons
        $this->setSettings($viewName, 'btnNew', false);
    }

    /**
     * Create views
     */
    protected function createViews()
    {
        parent::createViews();
        $this->createContactsView();
        $this->addEditListView('EditCuentaBancoProveedor', 'CuentaBancoProveedor', 'bank-accounts', 'fas fa-piggy-bank');
        $this->createSubaccountsView();
        $this->createEmailsView();
        $this->createViewDocFiles();

        $this->createProductView();
        $this->createInvoiceView('ListFacturaProveedor');
        $this->createDocumentView('ListAlbaranProveedor', 'AlbaranProveedor', 'delivery-notes');
        $this->createDocumentView('ListPedidoProveedor', 'PedidoProveedor', 'orders');
        $this->createDocumentView('ListPresupuestoProveedor', 'PresupuestoProveedor', 'estimations');
        $this->createReceiptView('ListReciboProveedor', 'ReciboProveedor');
    }

    /**
     * @return bool
     */
    protected function editAction()
    {
        $return = parent::editAction();
        if ($return && $this->active === $this->getMainViewName()) {
            $this->checkSubaccountLength($this->getModel()->codsubcuenta);

            // update contact email and phones when supplier email or phones are updated
            $this->updateContact($this->views[$this->active]->model);
        }

        return $return;
    }

    /**
     * @return bool
     */
    protected function insertAction()
    {
        if (false === parent::insertAction()) {
            return false;
        }

        // redirect to returnUrl if return is defined
        $returnUrl = $this->request->query->get('return');
        if (!empty($returnUrl)) {
            $model = $this->views[$this->active]->model;
            $this->redirect($returnUrl . '?' . $model->primaryColumn() . '=' . $model->primaryColumnValue());
        }

        return true;
    }

    /**
     * Load view data
     *
     * @param string $viewName
     * @param BaseView $view
     */
    protected function loadData($viewName, $view)
    {
        $codproveedor = $this->getViewModelValue('EditProveedor', 'codproveedor');
        $where = [new DataBaseWhere('codproveedor', $codproveedor)];

        switch ($viewName) {
            case 'EditCuentaBancoProveedor':
                $view->loadData('', $where, ['codcuenta' => 'DESC']);
                break;

            case 'EditDireccionContacto':
                $view->loadData('', $where, ['idcontacto' => 'DESC']);
                break;

            case 'ListAlbaranProveedor':
            case 'ListFacturaProveedor':
            case 'ListPedidoProveedor':
            case 'ListPresupuestoProveedor':
            case 'ListProductoProveedor':
            case 'ListReciboProveedor':
                $view->loadData('', $where);
                break;

            case 'ListLineaFacturaProveedor':
                $inSQL = 'SELECT idfactura FROM facturasprov WHERE codproveedor = ' . $this->dataBase->var2str($codproveedor);
                $where = [new DataBaseWhere('idfactura', $inSQL, 'IN')];
                $view->loadData('', $where);
                break;

            default:
                parent::loadData($viewName, $view);
                break;
        }
    }

    protected function setCustomWidgetValues(string $viewName)
    {
        // Load values option to VAT Type select input
        $columnVATType = $this->views[$viewName]->columnForName('vat-regime');
        if ($columnVATType && $columnVATType->widget->getType() === 'select') {
            $columnVATType->widget->setValuesFromArrayKeys(RegimenIVA::all(), true);
        }

        // Model exists?
        if (false === $this->views[$viewName]->model->exists()) {
            $this->views[$viewName]->disableColumn('contact');
            return;
        }

        // Search for supplier contacts
        $codproveedor = $this->getViewModelValue($viewName, 'codproveedor');
        $where = [new DataBaseWhere('codproveedor', $codproveedor)];
        $contacts = $this->codeModel->all('contactos', 'idcontacto', 'descripcion', false, $where);

        // Load values option to default contact
        $columnBilling = $this->views[$viewName]->columnForName('contact');
        if ($columnBilling && $columnBilling->widget->getType() === 'select') {
            $columnBilling->widget->setValuesFromCodeModel($contacts);
        }
    }
}
