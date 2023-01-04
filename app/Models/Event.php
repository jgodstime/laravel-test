<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Get all of the workShops for the Event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workshops()
    {
        return $this->hasMany(WorkShop::class);
    }
}
