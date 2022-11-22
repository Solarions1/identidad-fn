<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\Widget;

/**
 * Description of WidgetDatalist
 *
 * @author Jose Antonio Cuello Principal <yopli2000@gmail.com>
 */
class WidgetDatalist extends WidgetSelect
{

    /**
     * @param string $type
     * @param string $extraClass
     *
     * @return string
     */
    protected function inputHtml($type = 'datalist', $extraClass = '')
    {
        $class = $this->combineClasses($this->css('form-control'), $this->class, $extraClass);
        $list = $this->fieldname . '-list-' . $this->getUniqueId();
        $html = '<input type="text" name="' . $this->fieldname . '" value="' . $this->value . '"'
            . ' class="' . $class . '"'
            . ' list="' . $list . '"'
            . $this->inputHtmlExtraParams()
            . '/>';

        $html .= '<datalist id="' . $list . '">';
        foreach ($this->values as $option) {
            $title = empty($option['title']) ? $option['value'] : $option['title'];
            $html .= '<option value="' . $title . '" />';
        }
        $html .= '</datalist>';
        return $html;
    }
}
