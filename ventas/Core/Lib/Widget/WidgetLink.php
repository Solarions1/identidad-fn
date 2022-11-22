<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\Widget;

use FacturaScripts\Core\Base\Utils;

/**
 * Description of WidgetLink
 *
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 * @author Carlos García Gómez  <carlos@facturascripts.com>
 */
class WidgetLink extends WidgetText
{

    /**
     * @param string $inside
     * @param string $titleurl
     *
     * @return string
     */
    protected function onclickHtml($inside, $titleurl = ''): string
    {
        if (empty($this->value)) {
            return empty($titleurl) ? $inside : '<a href="' . $titleurl . '">' . $inside . '</a>';
        }

        return Utils::isValidUrl($this->value) ?
            '<a target="_blank" href="' . $this->value . '" class="cancelClickable">' . $inside . '</a>' :
            $inside;
    }
}
