<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;

    // melakukan fillable/guard ke databarang
    protected $guarded = [];
    protected $data = ['created_at'];
}
