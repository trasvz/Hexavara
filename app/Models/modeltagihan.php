<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modeltagihan extends Model
{
    use HasFactory;
    protected $table = 'customer_detail';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'phone'];
}
