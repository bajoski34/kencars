<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiclePicture extends Model
{

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

}
