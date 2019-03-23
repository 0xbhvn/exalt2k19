<?php

namespace App;

class Events extends Model
{
    public function registration()
    {
        return $this->hasMany(Registration::class);
    }
}
