<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Lib\ExtendedController\ListController;

/**
 * Controller to list the items in the Agentes model
 *
 * @author Carlos García Gómez  <carlos@facturascripts.com>
 * @author Artex Trading sa     <jcuello@artextrading.com>
 */
class ListAgente extends ListController
{

    /**
     * Returns basic page attributes
     *
     * @return array
     */
    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'admin';
        $data['title'] = 'agents';
        $data['icon'] = 'fas fa-user-tie';
        return $data;
    }

    /**
     * Add Agent View
     *
     * @param string $viewName
     */
    protected function createAgentView(string $viewName = 'ListAgente')
    {
        $this->addView($viewName, 'Agente', 'agents', 'fas fa-user-tie');
        $this->addOrderBy($viewName, ['codagente'], 'code');
        $this->addOrderBy($viewName, ['nombre'], 'name', 1);
        $this->addSearchFields($viewName, ['nombre', 'codagente', 'email', 'telefono1', 'telefono2', 'observaciones']);

        // Filters
        $this->addFilterSelectWhere($viewName, 'status', [
            ['label' => $this->toolBox()->i18n()->trans('only-active'), 'where' => [new DataBaseWhere('debaja', false)]],
            ['label' => $this->toolBox()->i18n()->trans('only-suspended'), 'where' => [new DataBaseWhere('debaja', true)]],
            ['label' => $this->toolBox()->i18n()->trans('all'), 'where' => []]
        ]);

        $cargos = $this->codeModel->all('agentes', 'cargo', 'cargo');
        $this->addFilterSelect($viewName, 'cargo', 'position', 'cargo', $cargos);
    }

    /**
     * Load views
     */
    protected function createViews()
    {
        $this->createAgentView();
    }
}
