<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'release_date'
    ];

    public function actors(){
        return $this->belongsToMany(Actor::class);

    }

    public function productionCompany(){
        return $this->belongsTo(ProductionCompany::class);

    }

}