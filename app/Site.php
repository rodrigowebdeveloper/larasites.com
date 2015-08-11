<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Site extends Model
{
    protected $dates = ['approved_at'];

    public function host()
    {
        return $this->hasOne(Host::class);
    }

    public function approve()
    {
        $this->approved_at = Carbon::now();
        return $this;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
