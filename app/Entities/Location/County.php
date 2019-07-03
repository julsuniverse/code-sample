<?php

namespace App\Entities\Data\Location;

use Illuminate\Database\Eloquent\Model;

/**
 * Class County
 * @package App\Entities\Data\Location
 * @mixin \Eloquent
 */
class County extends Model
{
    /**
     * @inheritdoc
     */
    protected $guarded = [];

    /**
     * @inheritdoc
     */
    public $timestamps = false;
}
