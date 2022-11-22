<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\DataSrc\Ejercicios;
use FacturaScripts\Dinamic\Lib\ExtendedController\ListController;
use FacturaScripts\Dinamic\Lib\Import\CSVImport;
use FacturaScripts\Dinamic\Model\CuentaEspecial;

/**
 * Controller to list the items in the Cuenta model.
 *
 * @author Carlos García Gómez           <carlos@facturascripts.com>
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 */
class ListCuenta extends ListController
{

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'accounting';
        $data['title'] = 'accounting-accounts';
        $data['icon'] = 'fas fa-book';
        return $data;
    }

    /**
     * Load views
     */
    protected function createViews()
    {
        $this->createViewsSubaccounts();
        $this->createViewsAccounts();
        $this->createViewsSpecialAccounts();
    }

    protected function createViewsAccounts(string $viewName = 'ListCuenta')
    {
        $this->addView($viewName, 'Cuenta', 'accounts', 'fas fa-book');
        $this->addOrderBy($viewName, ['codejercicio desc, codcuenta'], 'code');
        $this->addOrderBy($viewName, ['codejercicio desc, descripcion'], 'description');
        $this->addSearchFields($viewName, ['descripcion', 'codcuenta', 'codejercicio', 'codcuentaesp']);

        // filters
        $this->addFilterSelect($viewName, 'codejercicio', 'exercise', 'codejercicio', Ejercicios::codeModel());

        $specialAccounts = $this->codeModel->all('cuentasesp', 'codcuentaesp', 'codcuentaesp');
        $this->addFilterSelect($viewName, 'codcuentaesp', 'special-account', 'codcuentaesp', $specialAccounts);
    }

    protected function createViewsSpecialAccounts(string $viewName = 'ListCuentaEspecial')
    {
        $this->addView($viewName, 'CuentaEspecial', 'special-accounts', 'fas fa-newspaper');
        $this->addOrderBy($viewName, ['codcuentaesp'], 'code', 1);
        $this->addOrderBy($viewName, ['descripcion'], 'description');
        $this->addSearchFields($viewName, ['descripcion', 'codcuentaesp']);

        // disable buttons
        $this->setSettings($viewName, 'btnDelete', false);
        $this->setSettings($viewName, 'btnNew', false);
        $this->setSettings($viewName, 'checkBoxes', false);

        // add restore button
        if ($this->user->admin) {
            $this->addButton($viewName, [
                'action' => 'restore-special',
                'color' => 'warning',
                'confirm' => true,
                'icon' => 'fas fa-trash-restore',
                'label' => 'restore'
            ]);
        }
    }

    protected function createViewsSubaccounts(string $viewName = 'ListSubcuenta')
    {
        $this->addView($viewName, 'Subcuenta', 'subaccounts', 'fas fa-th-list');
        $this->addOrderBy($viewName, ['codejercicio desc, codsubcuenta'], 'code');
        $this->addOrderBy($viewName, ['codejercicio desc, descripcion'], 'description');
        $this->addOrderBy($viewName, ['saldo'], 'balance');
        $this->addSearchFields($viewName, ['codsubcuenta', 'descripcion', 'codejercicio', 'codcuentaesp']);

        // filters
        $this->addFilterNumber($viewName, 'debit-major', 'debit', 'debe', '>=');
        $this->addFilterNumber($viewName, 'debit-minor', 'debit', 'debe', '<=');
        $this->addFilterNumber($viewName, 'credit-major', 'credit', 'haber', '>=');
        $this->addFilterNumber($viewName, 'credit-minor', 'credit', 'haber', '<=');
        $this->addFilterNumber($viewName, 'balance-major', 'balance', 'saldo', '>=');
        $this->addFilterNumber($viewName, 'balance-minor', 'balance', 'saldo', '<=');

        $this->addFilterSelect($viewName, 'codejercicio', 'exercise', 'codejercicio', Ejercicios::codeModel());

        $specialAccounts = $this->codeModel->all('cuentasesp', 'codcuentaesp', 'codcuentaesp');
        $this->addFilterSelect($viewName, 'codcuentaesp', 'special-account', 'codcuentaesp', $specialAccounts);
    }

    /**
     * @param string $action
     *
     * @return bool
     */
    protected function execPreviousAction($action)
    {
        if ($action === 'restore-special') {
            $this->restoreSpecialAccountsAction();
        }

        return parent::execPreviousAction($action);
    }

    protected function restoreSpecialAccountsAction()
    {
        $sql = CSVImport::updateTableSQL(CuentaEspecial::tableName());
        if (!empty($sql)) {
            $this->dataBase->exec($sql);
        }

        $this->toolBox()->i18nLog()->notice('record-updated-correctly');
    }
}
