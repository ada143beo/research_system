<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'role_id'];

     // Relationship with Role
     public function role()
     {
         return $this->belongsTo(Role::class, 'role_id');
     }

     // Relationship with User
     public function user()
     {
         return $this->belongsTo(User::class, 'user_id');
     }
 }


