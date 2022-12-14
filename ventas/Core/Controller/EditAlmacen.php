<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Lib\ExtendedController\BaseView;
use FacturaScripts\Core\Lib\ExtendedController\EditController;

/**
 * Controller to edit a single item from the Almacen model
 *
 * @author Carlos García Gómez      <carlos@facturascripts.com>
 * @author Artex Trading sa         <jcuello@artextrading.com>
 * @author Francesc Pineda Segarra  <francesc.pineda.segarra@gmail.com>
 */
class EditAlmacen extends EditController
{

    /**
     * Returns the model name.
     *
     * @return string
     */
    public function getModelClassName()
    {
        return 'Almacen';
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
        $data['title'] = 'warehouse';
        $data['icon'] = 'fas fa-warehouse';
        return $data;
    }

    /**
     * @param string $viewName
     */
    protected function createStockView(string $viewName = 'ListStock')
    {
        $this->addListView($viewName, 'Join\StockProducto', 'stock', 'fas fa-dolly');
        $this->views[$viewName]->addOrderBy(['stocks.referencia'], 'reference');
        $this->views[$viewName]->addOrderBy(['stocks.cantidad'], 'quantity');
        $this->views[$viewName]->addOrderBy(['stocks.disponible'], 'available');
        $this->views[$viewName]->addOrderBy(['stocks.reservada'], 'reserved');
        $this->views[$viewName]->addOrderBy(['stocks.pterecibir'], 'pending-reception');
        $this->views[$viewName]->addOrderBy(['productos.descripcion', 'stocks.referencia'], 'product');
        $this->views[$viewName]->addSearchFields(['stocks.referencia', 'productos.descripcion']);

        // disable column
        $this->views[$viewName]->disableColumn('warehouse');

        // disable buttons
        $this->setSettings($viewName, 'btnDelete', false);
        $this->setSettings($viewName, 'btnNew', false);
    }

    /**
     * Add tabs or views.
     */
    protected function createViews()
    {
        parent::createViews();
        $this->setTabsPosition('bottom');

        // disable company column if there is only one company
        if ($this->empresa->count() < 2) {
            $this->views[$this->getMainViewName()]->disableColumn('company');
        }

        $this->createStockView();
    }

    /**
     * Load data view procedure
     *
     * @param string $viewName
     * @param BaseView $view
     */
    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListStock':
                $code = $this->getViewModelValue($this->getMainViewName(), 'codalmacen');
                $where = [new DataBaseWhere('codalmacen', $code)];
                $view->loadData('', $where);
                break;

            default:
                parent::loadData($viewName, $view);
                break;
        }
    }
}
