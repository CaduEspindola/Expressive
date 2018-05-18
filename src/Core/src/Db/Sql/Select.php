<?php
/**
 * Core (http://)
 * @authors Cadu Espindola (cadu.espindola@gmail.com)
 * @date    2018-05-18 13:43:49
 * @version 1.0.0
 */

namespace Core\Db\Sql;

use Zend\Db\Sql;
use Zend\Db\Sql\Where;
use Zend\Db\Sql\Join;
use Zend\Db\Sql\Having;
use Zend\Db\Sql\TableIdentifier;

class Select extends Sql\Select
{
    
    /**
     * Constructor
     * @param  null|string|array|TableIdentifier $table
     */
    public function __construct($table = null)
    {
        parent::__construct($table);
        $this->where = new Where;
    }

}