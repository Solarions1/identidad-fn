<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Model;

use FacturaScripts\Core\Model\Base;

/**
 * Description of EmailNotification
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
class EmailNotification extends Base\ModelClass
{

    use Base\ModelTrait;

    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $creationdate;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $subject;

    public function clear()
    {
        parent::clear();
        $this->creationdate = date(self::DATE_STYLE);
        $this->enabled = true;
    }

    public static function primaryColumn(): string
    {
        return 'name';
    }

    public static function tableName(): string
    {
        return 'emails_notifications';
    }

    public function test(): bool
    {
        $this->name = $this->toolBox()->utils()->noHtml($this->name);
        $this->subject = $this->toolBox()->utils()->noHtml($this->subject);
        return parent::test();
    }

    public function url(string $type = 'auto', string $list = 'ConfigEmail?activetab=List'): string
    {
        return parent::url($type, $list);
    }
}
