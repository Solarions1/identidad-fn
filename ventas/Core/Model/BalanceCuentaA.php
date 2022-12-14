<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2014-2022 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Core\Model;

/**
 * Abbreviated detail of a balance.
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
class BalanceCuentaA extends Base\ModelClass
{

    use Base\ModelTrait;

    /**
     * Balance code.
     *
     * @var string
     */
    public $codbalance;

    /**
     * Account code.
     *
     * @var string
     */
    public $codcuenta;

    /**
     * Description of the account.
     *
     * @var string
     */
    public $desccuenta;

    /**
     * Primary key.
     *
     * @var int
     */
    public $id;

    public function install(): string
    {
        // needed dependency
        new Balance();

        return parent::install();
    }

    public static function primaryColumn(): string
    {
        return 'id';
    }

    public static function tableName(): string
    {
        return 'balancescuentasabreviadas';
    }

    public function test(): bool
    {
        $this->desccuenta = $this->toolBox()->utils()->noHtml($this->desccuenta);
        return parent::test();
    }
}
