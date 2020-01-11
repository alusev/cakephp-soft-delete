<?php

namespace SoftDelete\Test\Table;

use Cake\ORM\Table;
use SoftDelete\Model\Table\SoftDeleteTrait;

class PostsTagsTable extends Table
{
    use SoftDeleteTrait;

    public function initialize(array $config): void
    {
        $this->belongsTo('Tags');
        $this->belongsTo('Posts');
    }
}
