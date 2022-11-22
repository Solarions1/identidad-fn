<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Lib\ExtendedController;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Lib\ListFilter\BaseFilter;
use FacturaScripts\Core\Model\User;
use FacturaScripts\Dinamic\Lib\ListFilter\AutocompleteFilter;
use FacturaScripts\Dinamic\Lib\ListFilter\CheckboxFilter;
use FacturaScripts\Dinamic\Lib\ListFilter\DateFilter;
use FacturaScripts\Dinamic\Lib\ListFilter\NumberFilter;
use FacturaScripts\Dinamic\Lib\ListFilter\PeriodFilter;
use FacturaScripts\Dinamic\Lib\ListFilter\SelectFilter;
use FacturaScripts\Dinamic\Lib\ListFilter\SelectWhereFilter;
use FacturaScripts\Dinamic\Model\PageFilter;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of ListViewFiltersTrait
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
trait ListViewFiltersTrait
{

    /**
     * Filter configuration preset by the user
     *
     * @var BaseFilter[]
     */
    public $filters = [];

    /**
     * Predefined filter values selected
     *
     * @var int
     */
    public $pageFilterKey = 0;

    /**
     * List of predefined filter values
     *
     * @var PageFilter[]
     */
    public $pageFilters = [];

    /**
     * @var bool
     */
    public $showFilters = false;

    abstract public function getViewName(): string;

    /**
     * Add an autocomplete type filter to the ListView.
     *
     * @param string $key
     * @param string $label
     * @param string $field
     * @param string $table
     * @param string $fieldcode
     * @param string $fieldtitle
     * @param array $where
     */
    public function addFilterAutocomplete(string $key, string $label, string $field, string $table, string $fieldcode = '', string $fieldtitle = '', array $where = [])
    {
        $this->filters[$key] = new AutocompleteFilter($key, $field, $label, $table, $fieldcode, $fieldtitle, $where);
    }

    /**
     * Adds a boolean condition type filter to the ListView.
     *
     * @param string $key
     * @param string $label
     * @param string $field
     * @param string $operation
     * @param mixed $matchValue
     * @param array $default
     */
    public function addFilterCheckbox(string $key, string $label = '', string $field = '', string $operation = '=', $matchValue = true, array $default = [])
    {
        $this->filters[$key] = new CheckboxFilter($key, $field, $label, $operation, $matchValue, $default);
    }

    /**
     * Adds a date type filter to the ListView.
     *
     * @param string $key
     * @param string $label
     * @param string $field
     * @param string $operation
     */
    public function addFilterDatePicker(string $key, string $label = '', string $field = '', string $operation = '>=')
    {
        $this->filters[$key] = new DateFilter($key, $field, $label, $operation);
    }

    /**
     * Adds a numeric type filter to the ListView.
     *
     * @param string $key
     * @param string $label
     * @param string $field
     * @param string $operation
     */
    public function addFilterNumber(string $key, string $label = '', string $field = '', string $operation = '>=')
    {
        $this->filters[$key] = new NumberFilter($key, $field, $label, $operation);
    }

    /**
     * Adds a period type filter to the ListView.
     * (period + start date + end date)
     *
     * @param string $key
     * @param string $label
     * @param string $field
     */
    public function addFilterPeriod(string $key, string $label, string $field)
    {
        $this->filters[$key] = new PeriodFilter($key, $field, $label);
    }

    /**
     * Add a select type filter to a ListView.
     *
     * @param string $key
     * @param string $label
     * @param string $field
     * @param array $values
     */
    public function addFilterSelect(string $key, string $label, string $field, array $values = [])
    {
        $this->filters[$key] = new SelectFilter($key, $field, $label, $values);
    }

    /**
     * Add a select where type filter to a ListView.
     *
     * @param string $key
     * @param array $values
     *
     * Example of values:
     *   [
     *    ['label' => 'Only active', 'where' => [ new DataBaseWhere('suspended', 'FALSE') ]]
     *    ['label' => 'Only suspended', 'where' => [ new DataBaseWhere('suspended', 'TRUE') ]]
     *    ['label' => 'All records', 'where' => []],
     *   ]
     */
    public function addFilterSelectWhere(string $key, array $values)
    {
        $this->filters[$key] = new SelectWhereFilter($key, $values);
    }

    /**
     * Removes a saved user filter.
     *
     * @param string $idfilter
     *
     * @return bool
     */
    public function deletePageFilter(string $idfilter): bool
    {
        $pageFilter = new PageFilter();
        if ($pageFilter->loadFromCode($idfilter) && $pageFilter->delete()) {
            // remove form the list
            unset($this->pageFilters[$idfilter]);

            return true;
        }

        return false;
    }

    /**
     * Save filter values for user/s.
     *
     * @param Request $request
     * @param User $user
     *
     * @return int
     */
    public function savePageFilter(Request $request, User $user): int
    {
        $pageFilter = new PageFilter();
        // Set values data filter
        foreach ($this->filters as $filter) {
            $name = $filter->name();
            $value = $request->request->get($name);
            if ($value !== null) {
                $pageFilter->filters[$name] = $value;
            }
        }

        // If filters values its empty, don't save filter
        if (empty($pageFilter->filters)) {
            return 0;
        }

        // Set basic data and save filter
        $pageFilter->id = $request->request->get('filter-id');
        $pageFilter->description = $request->request->get('filter-description', '');
        $pageFilter->name = explode('-', $this->getViewName())[0];
        $pageFilter->nick = $user->nick;

        // Save and return it's all ok
        if ($pageFilter->save()) {
            $this->pageFilters[] = $pageFilter;
            return $pageFilter->id;
        }

        return 0;
    }

    /**
     * @param DataBaseWhere[] $where
     */
    private function loadSavedFilters(array $where)
    {
        $pageFilter = new PageFilter();
        $orderBy = ['nick' => 'ASC', 'description' => 'ASC'];
        foreach ($pageFilter->all($where, $orderBy) as $filter) {
            $this->pageFilters[$filter->id] = $filter;
        }
    }

    private function sortFilters()
    {
        uasort($this->filters, function ($filter1, $filter2) {
            if ($filter1->ordernum === $filter2->ordernum) {
                return 0;
            }

            return $filter1->ordernum > $filter2->ordernum ? 1 : -1;
        });
    }
}
