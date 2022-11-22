<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\Widget;

/**
 * Description of RowStatistics
 *
 * @author Carlos García Gómez  <carlos@facturascripts.com>
 */
class RowStatistics extends VisualItem
{

    /** @var array */
    protected $children;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
        $this->children = $data['children'];
    }

    /**
     * @param object $controller
     *
     * @return string
     */
    public function render(&$controller): string
    {
        $html = '';
        foreach ($this->children as $child) {
            if ($child['tag'] === 'datalabel') {
                $html .= $this->renderDataLabel($controller, $child);
            }
        }

        return $html;
    }

    /**
     * @param object $controller
     * @param array $data
     *
     * @return string
     */
    protected function renderDataLabel(&$controller, array $data): string
    {
        $color = isset($data['color']) ? $this->colorToClass($data['color'], 'btn-') : 'btn-light';
        $icon = isset($data['icon']) ? '<i class="' . $data['icon'] . ' fa-fw"></i> ' : '';
        $label = isset($data['label']) ? static::$i18n->trans($data['label']) : '';
        $link = $data['link'] ?? '#';
        $divID = empty($data['id']) ? '' : ' id="' . $data['id'] . '"';
        $class = empty($data['class']) ? '' : $data['class'];

        if (!isset($data['function'])) {
            return ' ERROR';
        }

        $value = method_exists($controller, $data['function']) ? $controller->{$data['function']}() : '-';
        return ' <a href="' . $link . '"' . $divID . ' class="btn ' . $color . ' ' . $class . ' mb-2">' . $icon . $label . ' ' . $value . '</a>';
    }
}
