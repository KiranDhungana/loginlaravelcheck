<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class test_project extends Model
{
    use HasFactory;
    protected $table = "data";
    protected $fillable = ['email', 'password'];
}