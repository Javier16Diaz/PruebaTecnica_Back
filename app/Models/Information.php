<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Jenssegers\Mongodb\Eloquent\Model;
class Information extends Model
{
    use HasFactory;
   protected $conection = 'mongodb';
   protected $collection = 'information_collection';
}
