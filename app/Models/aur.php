<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aur extends Model
{
    use HasFactory;


    protected $fillable = [
        'staff_id',
         'email',
         'name',
        'password',
         
           
       ];
}
