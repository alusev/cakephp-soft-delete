<?php

namespace SoftDelete\Test\Table;

use Cake\ORM\Table;
use SoftDelete\Model\Table\SoftDeleteTrait;

class UsersTable extends Table
{
    use SoftDeleteTrait;

    public function initialize(array $config): void
    {
        $this->hasMany('Posts', [
            'dependent' => true,
            'cascadeCallbacks' => true,
        ]);
    }
}