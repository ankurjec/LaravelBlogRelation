<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Home;
use App\Models\Broker;

class Person extends Model
{
    use HasFactory;

    public function homeInformation()
    {
        return $this->hasOneThrough(Home::class, Broker::class);
    }
}