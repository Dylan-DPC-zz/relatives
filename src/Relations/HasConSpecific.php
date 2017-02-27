<?php namespace Dpc\Relatives\Relations;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class HasConSpecific extends BelongsToMany
{
    /**
     * HasConSpecific constructor.
     * @param Illuminate\Database\Eloquent\Builder|Builder $query
     * @param Illuminate\Database\Eloquent\Model|Model $parent
     * @param string $table
     * @param $foreignKeyInPivot
     * @param $otherKeyInPivot
     * @param null $relation
     */
    public function __construct(Builder $query, Model $parent, $table = 'relatives', $foreignKeyInPivot, $otherKeyInPivot, $relation = null)
    {

         parent::__construct($query, $parent, $table, $foreignKeyInPivot, $otherKeyInPivot, $relation);
    }

    



}