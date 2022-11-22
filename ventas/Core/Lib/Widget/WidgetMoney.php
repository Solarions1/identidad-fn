<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\Widget;

use FacturaScripts\Core\Base\DivisaTools;

/**
 * Description of WidgetMoney
 *
 * @author Carlos García Gómez  <carlos@facturascripts.com>
 */
class WidgetMoney extends WidgetNumber
{
    /**
     * @var DivisaTools
     */
    protected static $divisaTools;

    /**
     * @param array $data
     */
    public function __construct($data)
    {
        if (!isset(static::$divisaTools)) {
            static::$divisaTools = new DivisaTools();
        }

        parent::__construct($data);
    }

    public function showTableTotals(): bool
    {
        return true;
    }

    /**
     * @param object $model
     */
    protected function setValue($model)
    {
        parent::setValue($model);
        static::$divisaTools->findDivisa($model);

        if ('' === $this->icon) {
            $simbol = static::$divisaTools->getSymbol();
            switch ($simbol) {
                case '€':
                    $this->icon = 'fas fa-euro-sign';
                    break;

                case 'Q':
                    $this->icon = 'fab fa-quora';
                    break;

                default:
                    $this->icon = 'fas fa-dollar-sign';
                    break;
            }
        }
    }

    /**
     * @return string
     */
    protected function show()
    {
        return is_null($this->value) ? '-' : static::$divisaTools->format($this->value, $this->decimal);
    }
}
