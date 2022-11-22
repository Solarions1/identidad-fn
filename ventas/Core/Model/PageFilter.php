<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Model;

/**
 * Visual filter configuration of the FacturaScripts views,
 * each PageFilter corresponds to a view or tab filter.
 *
 * @author Artex Trading sa     <jcuello@artextrading.com>
 */
class PageFilter extends Base\ModelClass
{

    use Base\ModelTrait;

    /**
     * Human description
     *
     * @var string
     */
    public $description;

    /**
     * Definition of filters values
     *
     * @var array
     */
    public $filters;

    /**
     * Identifier
     *
     * @var int
     */
    public $id;

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

    public function clear()
    {
        parent::clear();
        $this->filters = [];
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
        array_push($exclude, 'filters', 'code', 'action');
        parent::loadFromData($data, $exclude);

        $this->filters = isset($data['filters']) ? json_decode($data['filters'], true) : [];
    }

    public static function primaryColumn(): string
    {
        return 'id';
    }

    public static function tableName(): string
    {
        return 'pages_filters';
    }

    public function test(): bool
    {
        $this->description = $this->toolBox()->utils()->noHtml($this->description);
        if (empty($this->description)) {
            $this->toolBox()->i18nLog()->warning('description-error');
            return false;
        }

        return parent::test();
    }

    /**
     * Returns the values of the view configuration fields in JSON format
     *
     * @return array
     */
    private function getEncodeValues(): array
    {
        return [
            'filters' => json_encode($this->filters)
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
