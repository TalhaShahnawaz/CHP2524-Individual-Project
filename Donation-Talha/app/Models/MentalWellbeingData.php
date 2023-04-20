<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentalWellbeingData extends Model
{
    use HasFactory;
    protected $table = 'mentalhealthform1';
    protected $fillable = ['name', 'email', 'mobile', 'emergency_mobile', 'current_location', 'message'];
}
