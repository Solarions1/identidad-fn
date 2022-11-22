<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\Widget;

/**
 * Description of RowActions
 *
 * @author Carlos García Gómez  <carlos@facturascripts.com>
 */
class RowActions extends VisualItem
{

    /**
     * @var array
     */
    protected $children;

    public function __construct(array $data)
    {
        parent::__construct($data);
        $this->children = $data['children'] ?? [];
    }

    /**
     * Adds a new button.
     *
     * @param array $btnArray
     */
    public function addButton(array $btnArray)
    {
        if (!isset($btnArray['tag'])) {
            $btnArray['tag'] = 'button';
        }

        $this->children[] = $btnArray;
    }

    public function render(bool $small = false, string $viewName = ''): string
    {
        $html = '';
        foreach ($this->children as $child) {
            if ($child['tag'] !== 'button') {
                continue;
            }

            $button = new RowButton($child);
            $html .= $button->render($small, $viewName);
        }

        return $html;
    }

    public function renderTop(): string
    {
        $html = '';
        foreach ($this->children as $child) {
            if ($child['tag'] !== 'button') {
                continue;
            }

            $button = new RowButton($child);
            $html .= $button->renderTop();
        }

        return $html;
    }
}
