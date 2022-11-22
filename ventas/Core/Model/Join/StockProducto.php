<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Model\Join;

use FacturaScripts\Dinamic\Model\Base\JoinModel;
use FacturaScripts\Dinamic\Model\Producto;

/**
 * Model Stock with Producto data
 *
 * @author Raul Jimenez                     <raul.jimenez@nazcanetworks.com>
 * @author Jose Antonio Cuello Principal    <yopli2000@gmail.com>
 * @author Carlos García Gómez              <carlos@facturascripts.com>
 */
class StockProducto extends JoinModel
{

    /**
     * Class constructor.
     * Set master model for controller actions.
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->setMasterModel(new Producto());
    }

    public function getModelFields(): array
    {
        $fields = parent::getModelFields();
        // forzamos el tipo de la columna total, ya que no existe en las tablas
        $fields['total']['type'] = 'double';
        return $fields;
    }

    /**
     * List of fields or columns to select clausule.
     *
     * @return array
     */
    protected function getFields(): array
    {
        return [
            'cantidad' => 'stocks.cantidad',
            'codalmacen' => 'stocks.codalmacen',
            'codfabricante' => 'productos.codfabricante',
            'codfamilia' => 'productos.codfamilia',
            'coste' => 'variantes.coste',
            'descripcion' => 'productos.descripcion',
            'disponible' => 'stocks.disponible',
            'idproducto' => 'stocks.idproducto',
            'idstock' => 'stocks.idstock',
            'precio' => 'variantes.precio',
            'pterecibir' => 'stocks.pterecibir',
            'referencia' => 'stocks.referencia',
            'reservada' => 'stocks.reservada',
            'stockmax' => 'stocks.stockmax',
            'stockmin' => 'stocks.stockmin',
            'total' => 'stocks.cantidad*variantes.coste'
        ];
    }

    protected function getSQLFrom(): string
    {
        return 'stocks'
            . ' LEFT JOIN variantes ON variantes.referencia = stocks.referencia'
            . ' LEFT JOIN productos ON productos.idproducto = variantes.idproducto';
    }

    protected function getTables(): array
    {
        return ['productos', 'stocks', 'variantes'];
    }
}
