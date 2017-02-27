<?php namespace Dpc\Relatives\Traits;

use Dpc\Relatives\Relations\HasConSpecific;

trait RelativeTrait
{

    /**
     * @param string $table
     * @param null $foreignKeyInPivot
     * @param null $otherKeyInPivot
     * @param string $relation
     * @return HasConSpecific
     * @internal param $related
     * @internal param string $foreignKey
     * @internal param string $otherKey
     */
    public function hasConSpecific($foreignKeyInPivot, $otherKeyInPivot, $table = 'relatives', $relation = null) : HasConSpecific
    {
        if (is_null($relation)) {
            $relation = $this->getBelongsToManyCaller();
        }
        $foreignKey = $foreignKeyInPivot ?: $this->getForeignKey();
        $query = $this->newQuery();

        return new HasConSpecific($query, $this, $table, $foreignKeyInPivot, $otherKeyInPivot, $relation);

    }

}