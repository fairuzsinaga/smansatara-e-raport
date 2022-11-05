<?php

namespace App\Models;

use App\Models\Raport;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataRaport extends Model
{
    use HasFactory;

    public function raport()
    {
        return $this->hasMany(Raport::class);
    }
}
