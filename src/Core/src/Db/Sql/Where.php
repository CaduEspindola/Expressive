<?php
/**
 * PHP Core (http://)
 * @authors Cadu Espindola (cadu.espindola@gmail.com)
 * @date    2018-05-18 13:43:49
 * @version 1.0.0
 */

namespace Core\Db\Sql;

use Zend\Db\Sql;

class Where extends Sql\Where
{
    public function scope(string $scope) : self
    {
        // apply scope

        return $this;
    }
}