<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\ExtendedController;

/**
 * Controller to manage the data editing
 *
 * @author Carlos García Gómez           <carlos@facturascripts.com>
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 */
abstract class EditController extends PanelController
{

    /**
     * Returns the class name of the model to use in the editView.
     */
    abstract public function getModelClassName();

    /**
     * Pointer to the data model.
     *
     * @return mixed
     */
    public function getModel()
    {
        $viewName = $this->getMainViewName();
        return $this->views[$viewName]->model;
    }

    /**
     * Return the basic data for this page.
     *
     * @return array
     */
    public function getPageData()
    {
        $data = parent::getPageData();
        $data['showonmenu'] = false;
        return $data;
    }

    /**
     * Create the view to display.
     */
    protected function createViews()
    {
        $viewName = 'Edit' . $this->getModelClassName();
        $modelName = $this->getModelClassName();
        $title = $this->getPageData()['title'];
        $viewIcon = $this->getPageData()['icon'];

        $this->addEditView($viewName, $modelName, $title, $viewIcon);
        $this->setSettings($viewName, 'btnPrint', true);
    }

    /**
     * Loads the data to display.
     *
     * @param string $viewName
     * @param BaseView $view
     */
    protected function loadData($viewName, $view)
    {
        $mainViewName = $this->getMainViewName();
        switch ($viewName) {
            case $mainViewName:
                /**
                 * We need the identifier to load the model. It's almost always code,
                 * but sometimes it's not.
                 */
                $primaryKey = $this->request->request->get($view->model->primaryColumn());
                $code = $this->request->query->get('code', $primaryKey);
                $view->loadData($code);

                // User can access to data?
                if (false === $this->checkOwnerData($view->model)) {
                    $this->setTemplate('Error/AccessDenied');
                    break;
                }

                // Data not found?
                $action = $this->request->request->get('action', '');
                if ('' === $action && !empty($code) && false === $view->model->exists()) {
                    $this->toolBox()->i18nLog()->warning('record-not-found');
                    break;
                }

                $this->title .= ' ' . $view->model->primaryDescription();
                break;
        }
    }
}
