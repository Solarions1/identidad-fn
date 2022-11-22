<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

/**
 * Description of EditEmailNotification
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
class EditEmailNotification extends EditController
{

    /**
     * @return array
     */
    public function getPageData()
    {
        $pageData = parent::getPageData();
        $pageData['title'] = 'email-notification';
        $pageData['menu'] = 'admin';
        $pageData['icon'] = 'fas fa-bell';
        return $pageData;
    }

    /**
     * @return string
     */
    public function getModelClassName()
    {
        return 'EmailNotification';
    }

    /**
     * Create the view to display.
     */
    protected function createViews()
    {
        parent::createViews();
        $viewName = $this->getMainViewName();
        $this->setSettings($viewName, 'btnNew', false);
        $this->setSettings($viewName, 'btnDelete', false);
    }
}
