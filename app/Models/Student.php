<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;
    // protected $fillable = ['name'];  //commenting it out to try the guarded method

    
  
    //add the rest of the properties

    protected $guarded = [];

    public function course():BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
