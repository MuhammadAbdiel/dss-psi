<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrix extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function alternatives()
    {
        return $this->hasMany(Alternative::class, 'alternative_id');
    }

    public function criterias()
    {
        return $this->hasMany(Criteria::class, 'criteria_id');
    }
}
