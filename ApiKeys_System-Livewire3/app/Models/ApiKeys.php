<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiKeys extends Model
{
    use HasFactory;

    protected $table='apikey';

    protected $fillable=[
        'Name','createdBy','ApiKey','Status'
    ];
}
