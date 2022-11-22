<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\Widget;

use FacturaScripts\Dinamic\Lib\AssetManager;

/**
 * Description of WidgetPassword
 *
 * @author Carlos García Gómez  <carlos@facturascripts.com>
 */
class WidgetPassword extends WidgetText
{

    /**
     * Adds assets to the asset manager.
     */
    protected function assets()
    {
        AssetManager::add('js', FS_ROUTE . '/Dinamic/Assets/JS/WidgetPassword.js', 2);
        AssetManager::add('css', FS_ROUTE . '/Dinamic/Assets/CSS/WidgetPassword.css', 2);
    }

    /**
     * @param object $model
     * @param string $title
     * @param string $description
     * @param string $titleurl
     *
     * @return string
     */
    public function edit($model, $title = '', $description = '', $titleurl = ''): string
    {
        $this->setValue($model);
        $descriptionHtml = empty($description) ? '' : '<small class="form-text text-muted">' . static::$i18n->trans($description) . '</small>';
        $labelHtml = '<label class="mb-0">' . $this->onclickHtml(static::$i18n->trans($title), $titleurl) . '</label>';

        return '<div class="form-group mb-2">'
            . $labelHtml
            . '<div class="input-group">'
            . '<div class="' . $this->css('input-group-prepend') . ' d-flex d-sm-none d-xl-flex">'
            . '<span class="input-group-text edit-psw"><i class="fas fa-eye fa-fw"></i></span>'
            . '</div>'
            . $this->inputHtml()
            . '</div>'
            . $descriptionHtml
            . '</div>';
    }

    /**
     * @param string $type
     * @param string $extraClass
     *
     * @return string
     */
    protected function inputHtml($type = 'password', $extraClass = '')
    {
        $class = $this->combineClasses($this->css('form-control'), $this->class, $extraClass);
        return '<input type="text" name="' . $this->fieldname . '" value="' . $this->value
            . '" class="fs-psw ' . $class . '"' . $this->inputHtmlExtraParams() . '/>';
    }

    /**
     * @return string
     */
    protected function show()
    {
        return is_null($this->value) ? '' : '<span><span class="fs-psw pass">' . $this->value . '</span> <i class="list-psw fas fa-eye"></i></span>';
    }
}