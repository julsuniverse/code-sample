<?php

namespace App\Entities\Data\Location;

use App\Entities\Data\Tier;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * @package App\Entities\Data\Location
 * @mixin \Eloquent
 */
class City extends Model
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
    public function getTier()
    {
        return $this->belongsTo(Tier::class, 'tier', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
