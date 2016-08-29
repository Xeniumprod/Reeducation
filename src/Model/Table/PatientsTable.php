<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;

class UsersTable extends Table
{
	public function initialize(array $config)
    {
        $this->table('patients');
        $this->primaryKey('id');
   	}
}