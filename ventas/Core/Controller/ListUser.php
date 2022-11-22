<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\DataSrc\Almacenes;
use FacturaScripts\Core\DataSrc\Empresas;
use FacturaScripts\Core\Lib\ExtendedController\ListController;

/**
 * Controller to list the items in the User model
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
class ListUser extends ListController
{

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'admin';
        $data['title'] = 'users';
        $data['icon'] = 'fas fa-users';
        return $data;
    }

    /**
     * Load views
     */
    protected function createViews()
    {
        $this->createViewsUsers();
        $this->createViewsRoles();
    }

    protected function createViewsRoles(string $viewName = 'ListRole')
    {
        $this->addView($viewName, 'Role', 'roles', 'fas fa-address-card');
        $this->addSearchFields($viewName, ['codrole', 'descripcion']);
        $this->addOrderBy($viewName, ['descripcion'], 'description');
        $this->addOrderBy($viewName, ['codrole'], 'code');
    }

    protected function createViewsUsers(string $viewName = 'ListUser')
    {
        $this->addView($viewName, 'User', 'users', 'fas fa-users');
        $this->addSearchFields($viewName, ['nick', 'email']);
        $this->addOrderBy($viewName, ['nick'], 'nick', 1);
        $this->addOrderBy($viewName, ['email'], 'email');
        if ($this->user->admin) {
            $this->addOrderBy($viewName, ['level'], 'level');
        }
        $this->addOrderBy($viewName, ['creationdate'], 'creation-date');
        $this->addOrderBy($viewName, ['lastactivity'], 'last-activity');

        // filters
        if ($this->user->admin) {
            $levels = $this->codeModel->all('users', 'level', 'level');
            $this->addFilterSelect($viewName, 'level', 'level', 'level', $levels);
        }

        $languages = $this->codeModel->all('users', 'langcode', 'langcode');
        $this->addFilterSelect($viewName, 'langcode', 'language', 'langcode', $languages);

        $companies = Empresas::codeModel();
        if (count($companies) > 2) {
            $this->addFilterSelect($viewName, 'idempresa', 'company', 'idempresa', $companies);
        }

        $warehouses = Almacenes::codeModel();
        if (count($warehouses) > 2) {
            $this->addFilterSelect($viewName, 'codalmacen', 'warehouse', 'codalmacen', $warehouses);
        }

        // disable print button
        $this->setSettings($viewName, 'btnPrint', false);
    }
}
