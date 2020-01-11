<?php

namespace SoftDelete\Test\Table;

use Cake\ORM\Table;
use SoftDelete\Model\Table\SoftDeleteTrait;

class PostsTable extends Table
{
    use SoftDeleteTrait;

    public function initialize(array $config): void
    {
        $this->belongsTo('Users');
        $this->belongsToMany('Tags');
        $this->addBehavior('CounterCache', ['Users' => ['posts_count']]);
    }
}
