<?php

namespace SoftDelete\Test\Table;

use Cake\ORM\Table;
use SoftDelete\Model\Table\SoftDeleteTrait;

class TagsTable extends Table
{
    use SoftDeleteTrait;

    public $softDeleteField = 'deleted_date';

    public function initialize(array $config): void
    {
        $this->belongsToMany('Posts', [
            'through' => 'PostsTags',
            'joinTable' => 'posts_tags',
            'foreignKey' => 'tag_id',
            'targetForeignKey' => 'post_id'
        ]);
        $this->hasMany('PostsTags');
    }
}
