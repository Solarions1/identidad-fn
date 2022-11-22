<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\ListFilter;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Model\CodeModel;

/**
 * Description of SelectFilter
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
class SelectFilter extends BaseFilter
{

    /** @var string */
    public $icon = '';

    /** @var array */
    public $values;

    public function __construct(string $key, string $field, string $label, array $values = [])
    {
        parent::__construct($key, $field, $label);
        $this->autosubmit = true;
        $this->values = $values;
    }

    public function getDataBaseWhere(array &$where): bool
    {
        if ('' !== $this->value && null !== $this->value) {
            $where[] = new DataBaseWhere($this->field, $this->value);
            return true;
        }

        return false;
    }

    public function render(): string
    {
        if (empty($this->icon)) {
            return '<div class="col-sm-3 col-lg-2">'
                . '<div class="form-group">'
                . '<select name="' . $this->name() . '" class="form-control"' . $this->onChange() . $this->readonly()
                . ' title="' . static::$i18n->trans($this->label) . '">' . $this->getHtmlOptions()
                . '</select>'
                . '</div>'
                . '</div>';
        }

        return '<div class="col-sm-3 col-lg-2">'
            . '<div class="form-group">'
            . '<div class="input-group" title="' . static::$i18n->trans($this->label) . '">'
            . '<span class="input-group-prepend">'
            . '<span class="input-group-text">'
            . '<i class="' . $this->icon . ' fa-fw" aria-hidden="true"></i>'
            . '</span>'
            . '</span>'
            . '<select name="' . $this->name() . '" class="form-control"' . $this->onChange() . $this->readonly() . '>'
            . $this->getHtmlOptions()
            . '</select>'
            . '</div>'
            . '</div>'
            . '</div>';
    }

    protected function getHtmlOptions(): string
    {
        $html = '<option value="">' . static::$i18n->trans($this->label) . '</option>';
        foreach ($this->values as $key => $data) {
            if ($data instanceof CodeModel) {
                $extra = ('' != $this->value && $data->code == $this->value) ? ' selected=""' : '';
                $html .= '<option value="' . $data->code . '"' . $extra . '>' . $data->description . '</option>';
                continue;
            }

            if (is_array($data) && array_key_exists('code', $data) && array_key_exists('description', $data)) {
                $extra = ('' != $this->value && $data['code'] == $this->value) ? ' selected=""' : '';
                $html .= '<option value="' . $data['code'] . '"' . $extra . '>' . $data['description'] . '</option>';
                continue;
            }

            if (is_string($data)) {
                $extra = ('' != $this->value && $key == $this->value) ? ' selected=""' : '';
                $html .= '<option value="' . $key . '"' . $extra . '>' . $data . '</option>';
            }
        }

        return $html;
    }
}
