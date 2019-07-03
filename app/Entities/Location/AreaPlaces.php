<?php


namespace App\Entities\Data\Location;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AreaPlaces
 * @package App\Entities\Data\Location
 * @mixin \Eloquent
 */
class AreaPlaces extends Model
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
