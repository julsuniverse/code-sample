<?php


namespace App\Entities\Data\Location;

use App\Entities\Data\Tier;
use App\Entities\User\Practice\Practice;
use App\Entities\User\Provider\Specialist;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Area
 * @package App\Entities\Data\Location
 * @mixin \Eloquent
 */
class Area extends Model
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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function cities()
    {
        return $this->belongsToMany(City::class,
            'area_places',
            'area_id',
            'city_id'
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function zipCodes()
    {
        return $this->belongsToMany(ZipCode::class,
            'area_places',
            'area_id',
            'zip_id'
        );
    }

    /**
     * @return array|null
     */
    public function getGeocodeAttribute(): ?array
    {
        if (isset($this->cities[0])) {
            return ['lat' => $this->cities[0]->lat, 'lng' => $this->cities[0]->lng];
        }
        if (isset($this->zipCodes[0])) {
            return ['lat' => $this->zipCodes[0]->lat, 'lng' => $this->zipCodes[0]->lng];
        }
        return null;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getTier()
    {
        return $this->belongsTo(Tier::class, 'tier', 'id');
    }

    /**
     * @return bool
     */
    public function isOpen(): bool
    {
        return $this->is_open;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specialists()
    {
        return $this->hasMany(Specialist::class, 'area_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function practices()
    {
        return $this->hasMany(Practice::class, 'area_id', 'id');
    }
}
