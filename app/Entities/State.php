<?php

namespace App\Entities\Data;

use App\Entities\Data\Location\Region;
use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 * @package App\Entities\Data
 */
class State extends Model
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function region()
    {
        return $this->hasOne(Region::class);
    }
}
