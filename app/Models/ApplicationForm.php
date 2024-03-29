<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationForm extends Model
{
    use HasFactory;
    public $table = 'applicationform';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
