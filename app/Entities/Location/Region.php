<?php


namespace App\Entities\Data\Location;

use App\Entities\Data\State;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 * @package App\Entities\Data\Location
 * @mixin \Eloquent
 */
class Region extends Model
{
    /**
     * @inheritdoc
     */
    protected $guarded = [];

    /**
     * @inheritdoc
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
