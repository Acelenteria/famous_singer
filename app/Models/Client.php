<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist',
        'music',
        'followers',
        'age',
        'spotify',
        'youtube',
        'email',
        'pic',
        'enable'
    ];


    protected $appends = ['picUrl'];

    public function getPicUrlAttribute() {
        $url = $this->pic ? asset("images/product_pics/" . $this->pic) : "https://images.unsplash.com/photo-1516280440614-37939bbacd81?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8c2luZ2luZ3xlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80";
        return $url;
    }

}
