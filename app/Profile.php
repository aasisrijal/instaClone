<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profilePic(){

        $imagePath = ($this->image) ? $this->image: '/profile/K96LfqALOQjNq5WplEIWzu3WPmtsmjmydeUVNfDr.png';
        return '/storage/' . $imagePath;
    }
    public function user(){
        return $this->belongsTo(User::class); 
    }
    
    public function followers(){
        return $this->belongsToMany(User::class);
    }
}
