<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id');
    }
    public function orders(): hasMany{
        return $this->hasMany(Order::class,'client_id');
    }
}
