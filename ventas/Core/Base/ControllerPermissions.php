<?php
/*
 Software diseñado para Identidad, todos los derechos reservados
 */

namespace FacturaScripts\Core\Base;

use FacturaScripts\Dinamic\Model\RoleAccess;
use FacturaScripts\Dinamic\Model\User;

/**
 * Description of ControllerPermissions
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
class ControllerPermissions
{

    /**
     * @var int
     */
    public $accessMode = 1;

    /**
     * Have permission to access data.
     *
     * @var bool
     */
    public $allowAccess = false;

    /**
     * Have permission to delete data.
     *
     * @var bool
     */
    public $allowDelete = false;

    /**
     * Have permission to update data.
     *
     * @var bool
     */
    public $allowUpdate = false;

    /**
     * Permission for show all or only owner data.
     *
     * @var bool
     */
    public $onlyOwnerData = false;

    /**
     * ControllerPermissions constructor.
     *
     * @param User|false $user
     * @param string|null $pageName
     */
    public function __construct($user = false, $pageName = null)
    {
        if (empty($user) || empty($pageName)) {
            // do nothing
        } elseif ($user->admin) {
            // admin user
            $this->accessMode = 99;
            $this->allowAccess = true;
            $this->allowDelete = true;
            $this->allowUpdate = true;
            $this->onlyOwnerData = false;
        } else {
            // normal user
            foreach (RoleAccess::allFromUser($user->nick, $pageName) as $access) {
                $this->allowAccess = true;
                $this->allowDelete = $access->allowdelete ? true : $this->allowDelete;
                $this->allowUpdate = $access->allowupdate ? true : $this->allowUpdate;
                $this->onlyOwnerData = $access->onlyownerdata ? true : $this->onlyOwnerData;
            }
        }
    }

    /**
     * @param bool $access
     * @param int $accessMode
     * @param bool $delete
     * @param bool $update
     * @param bool $onlyOwner
     */
    public function set(bool $access, int $accessMode, bool $delete, bool $update, bool $onlyOwner = false)
    {
        $this->accessMode = $accessMode;
        $this->allowAccess = $access;
        $this->allowDelete = $delete;
        $this->allowUpdate = $update;
        $this->onlyOwnerData = $onlyOwner;
    }
}
