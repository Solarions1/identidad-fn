<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\App;

use FacturaScripts\Core\Model\Settings;

/**
 * AppSettings manage the essential data settings of the app.
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
final class AppSettings
{

    /**
     * Array of data settings.
     *
     * @var array
     */
    private static $data = [];

    /**
     * Contains if need to save data.
     *
     * @var bool
     */
    private static $save = false;

    /**
     * Return the value of property in group.
     *
     * @param string $group
     * @param string $property
     * @param mixed $default
     *
     * @return mixed
     */
    public static function get(string $group, string $property, $default = null)
    {
        if (!isset(self::$data[$group][$property])) {
            self::$data[$group][$property] = $default;
            self::$save = true;
        }

        return self::$data[$group][$property];
    }

    /**
     * Set the value for group property.
     *
     * @param string $group
     * @param string $property
     * @param string $value
     */
    public function set(string $group, string $property, $value)
    {
        if (!isset(self::$data[$group])) {
            self::$data[$group] = [];
        }

        self::$data[$group][$property] = $value;
    }

    /**
     * Load default App Settings.
     */
    public function load()
    {
        $this->reload();

        // Constants
        $constants = [
            'FS_CODPAIS' => ['property' => 'codpais', 'default' => 'ESP'],
            'FS_NF0' => ['property' => 'decimals', 'default' => 2],
            'FS_NF1' => ['property' => 'decimal_separator', 'default' => ','],
            'FS_NF2' => ['property' => 'thousands_separator', 'default' => ' '],
            'FS_CURRENCY_POS' => ['property' => 'currency_position', 'default' => 'right'],
            'FS_ITEM_LIMIT' => ['property' => 'item_limit', 'default' => 50],
        ];
        $this->setConstants($constants);

        // Other default values
        self::get('default', 'coddivisa', 'EUR');
        self::get('default', 'homepage', 'Wizard');
        self::get('default', 'updatesupplierprices', true);
        self::get('default', 'ventasinstock', false);

        if (self::$save) {
            $this->save();
        }
    }

    /**
     * Reloads settings from database.
     */
    public static function reload()
    {
        $settingsModel = new Settings();
        foreach ($settingsModel->all() as $group) {
            self::$data[$group->name] = $group->properties;
        }
    }

    /**
     * Store the model data in the database.
     */
    public function save()
    {
        foreach (self::$data as $key => $value) {
            $settings = new Settings();
            $settings->name = (string)$key;
            $settings->properties = $value;
            $settings->save();
        }

        self::$save = false;
    }

    /**
     * Set the values for constants.
     *
     * @param array $data
     */
    private function setConstants(array $data)
    {
        foreach ($data as $key => $value) {
            if (!defined($key)) {
                define($key, self::get('default', $value['property'], $value['default']));
            }
        }
    }
}
