<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = ['name']; 
    //add the rest of the properties

    


    public function courses():BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
