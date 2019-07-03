<?php


namespace App\Entities\Data\Location;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ZipCode
 * @package App\Entities\Data\Location
 * @mixin \Eloquent
 */
class ZipCode extends Model
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
