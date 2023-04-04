<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    protected $primaryKey = 'id';
    use HasFactory;
    public function owned_cars(): hasMany{
        return $this->hasMany(Car::class,'owner_id');
    }
}
