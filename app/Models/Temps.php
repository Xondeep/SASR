<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temps extends Model
{
    protected $fillable = ['name', 'address', 'class', 'phone_number', 'parent_email','rfid_card'];

    use HasFactory;
}
