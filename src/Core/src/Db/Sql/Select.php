<?php
/**
 * Core (http://)
 * 
 * @authors Cadu Espindola (cadu.espindola@gmail.com)
 * @date    2018-05-18 13:43:49
 * @version 1.0.0
 */

namespace Core\Db\Sql;

use Zend\Db\Sql;
use Zend\Db\Sql\Join;
use Zend\Db\Sql\Having;
use Zend\Db\Sql\TableIdentifier;

class Select extends Sql\Select
{
    /**
     * @var array
     */
    protected $with = [];
    
    /**
     * Constructor
     * @param  null|string|array|TableIdentifier $table
     */
    public function __construct($table = null)
    {
        parent::__construct($table);
        $this->where = new Where;
    }

    public function joinWith(string $tableGatewayClass) : self
    {
        if (! class_exists($tableGatewayClass)) {
            throw new Exception('The first parameter must be a TableGateway class name.');
        }

        return $this;
    }
}