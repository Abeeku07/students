<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Course extends Model
{
    use HasFactory;

     protected $fillable = ['name'];  // this code protects the form and db from unwanted entries, hence it only accepts input from name
    //another method is guarded
    //protected $guarded = [];

    public function students():HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function subjects():BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
    

}
