<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;
    protected $table = 'speaker';
    protected $primaryKey = 'id';
    protected $fillable = ['name','contact', 'email', 'image'];
}
