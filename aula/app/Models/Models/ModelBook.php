<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    protected $table='book';
    use HasFactory;

    public function relBooks()
        {
            return $this->hasOne('App\Models\User', 'id', 'id_user');
        }
}
