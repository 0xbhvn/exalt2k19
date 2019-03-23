<?php

namespace App;

class Registration extends Model
{
    public function events()
    {
        return $this->belongsTo(Events::class);
    }
}
