<?php

namespace App;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
