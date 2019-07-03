<?php


namespace App\Entities\Data;

use App\Entities\Data\Location\Area;
use App\Entities\Data\Location\City;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tier
 * @package App\Entities\Data
 * @mixin \Eloquent
 */
class Tier extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
