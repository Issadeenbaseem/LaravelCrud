<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['firstName','lastName','picture','mobile1','mobile2','nic','rvsaId','dob','gender','email'];
    use HasFactory;
}
