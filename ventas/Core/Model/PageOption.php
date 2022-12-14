<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Model;

/**
 * Visual configuration of the FacturaScripts views,
 * each PageOption corresponds to a view or tab.
 *
 * @author Jose Antonio Cuello  <yopli2000@gmail.com>
 * @author Carlos García Gómez  <carlos@facturascripts.com>
 */
class PageOption extends Base\ModelClass
{

    use Base\ModelTrait;

    /**
     * Definition of the columns. It is called columns but it always
     * contains GroupItem, which contains the columns.
     *
     * @var array
     */
    public $columns;

    /**
     * Identifier
     *
     * @var int
     */
    public $id;

    /**
     * Definition of modal forms
     *
     * @var array
     */
    public $modals;

    /**
     * Name of the page (controller).
     *
     * @var string
     */
    public $name;

    /**
     * User Identifier.
     *
     * @var string
     */
    public $nick;

    /**
     * Definition for special treatment of rows
     *
     * @var array
     */
    public $rows;

    public function clear()
    {
        parent::clear();
        $this->columns = [];
        $this->modals = [];
        $this->rows = [];
    }

    public function install(): string
    {
        new Page();
        new User();

        return parent::install();
    }

    /**
     * Load the data from an array
     *
     * @param array $data
     * @param array $exclude
     */
    public function loadFromData(array $data = [], array $exclude = [])
    {
        array_push($exclude, 'columns', 'modals', 'filters', 'rows', 'code', 'action');
        parent::loadFromData($data, $exclude);

        $this->columns = json_decode($data['columns'], true);
        $this->modals = json_decode($data['modals'], true);
        $this->rows = json_decode($data['rows'], true);
    }

    public static function primaryColumn(): string
    {
        return 'id';
    }

    public static function tableName(): string
    {
        return 'pages_options';
    }

    /**
     * Returns the values of the view configuration fields in JSON format
     *
     * @return array
     */
    private function getEncodeValues(): array
    {
        return [
            'columns' => json_encode($this->columns),
            'modals' => json_encode($this->modals),
            'rows' => json_encode($this->rows),
        ];
    }

    protected function saveInsert(array $values = []): bool
    {
        return parent::saveInsert($this->getEncodeValues());
    }

    protected function saveUpdate(array $values = []): bool
    {
        return parent::saveUpdate($this->getEncodeValues());
    }
}
