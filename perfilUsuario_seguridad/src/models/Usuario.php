<?php
namespace Daw\models;

use Daw\config\Db;
/**
 *
 */
class Usuario extends Db
{
    function __construct()
    {
        parent::conectar();
    }


}
