<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'email'];

    // Relation to Users
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
