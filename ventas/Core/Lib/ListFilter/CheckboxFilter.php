<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\ListFilter;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

/**
 * Description of CheckboxFilter
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
class CheckboxFilter extends BaseFilter
{

    /**
     * @var DataBaseWhere[]
     */
    public $default;

    /**
     * @var mixed
     */
    public $matchValue;

    /**
     * @var string
     */
    public $operation;

    public function __construct(string $key, string $field = '', string $label = '', string $operation = '=', $matchValue = true, array $default = [])
    {
        parent::__construct($key, $field, $label);
        $this->autosubmit = true;
        $this->default = $default;
        $this->matchValue = $matchValue;
        $this->operation = $operation;
        $this->ordernum += 100;
    }

    public function getDataBaseWhere(array &$where): bool
    {
        if ('TRUE' === $this->value) {
            $where[] = new DataBaseWhere($this->field, $this->matchValue, $this->operation);
            return true;
        }

        $result = false;
        foreach ($this->default as $value) {
            $where[] = $value;
            $result = true;
        }

        return $result;
    }

    public function render(): string
    {
        $extra = is_null($this->value) ? '' : ' checked=""';
        return '<div class="col-sm-auto">'
            . '<div class="form-group">'
            . '<div class="form-check mb-2 mb-sm-0">'
            . '<label class="form-check-label mr-3">'
            . '<input class="form-check-input" type="checkbox" name="' . $this->name() . '" value="TRUE"' . $extra . $this->onChange() . $this->readonly() . '/>'
            . static::$i18n->trans($this->label)
            . '</label>'
            . '</div>'
            . '</div>'
            . '</div>';
    }
}
