<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    protected  $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function profileImage() {

        $imagePath = ($this->image) ? $this->image : "profile/6QOUJzmu8QYLScQ6IW5pSwHkD4J2xG0DOgydmQPb.png";
        return '/storage/'.$imagePath;
    }

    public function followers() {
        $this->belongsToMany(User::class);
    }
}
