<?php

namespace App\Models;

use App\Models\Mapel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    public function mapel()
    {
        return $this->hasMany(Mapel::class);
    }

    
}
