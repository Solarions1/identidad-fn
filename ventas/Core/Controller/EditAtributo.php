<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Lib\ExtendedController\BaseView;
use FacturaScripts\Core\Lib\ExtendedController\EditController;

/**
 * Controller to edit a single item from the Atributo model
 *
 * @author Carlos García Gómez      <carlos@facturascripts.com>
 * @author Artex Trading sa         <jcuello@artextrading.com>
 * @author Ramiro Salvador Mamani   <ramiro@solsun.pe>
 * @author Carlos Jiménez Gómez     <carlos@evolunext.es>
 */
class EditAtributo extends EditController
{

    /**
     * Returns the model name.
     *
     * @return string
     */
    public function getModelClassName()
    {
        return 'Atributo';
    }

    /**
     * Returns basic page attributes.
     *
     * @return array
     */
    public function getPageData()
    {
        $data = parent::getPageData();
        $data['menu'] = 'warehouse';
        $data['title'] = 'attribute';
        $data['icon'] = 'fas fa-tshirt';
        return $data;
    }

    /**
     * Load views
     */
    protected function createViews()
    {
        parent::createViews();
        $this->setTabsPosition('bottom');
        $this->createViewsAttValues();
    }

    /**
     * @param string $viewName
     */
    protected function createViewsAttValues(string $viewName = 'EditAtributoValor')
    {
        $this->addEditListView($viewName, 'AtributoValor', 'attribute-values');
        $this->views[$viewName]->setInLine(true);

        // disable column
        $this->views[$viewName]->disableColumn('attribute');
    }

    /**
     * Load view data procedure
     *
     * @param string $viewName
     * @param BaseView $view
     */
    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'EditAtributoValor':
                $code = $this->getViewModelValue($this->getMainViewName(), 'codatributo');
                $where = [new DataBaseWhere('codatributo', $code)];
                $view->loadData('', $where, ['orden' => 'ASC', 'id' => 'DESC']);
                break;

            default:
                parent::loadData($viewName, $view);
                break;
        }
    }
}
