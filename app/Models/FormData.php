<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $table = 'form_data';

    protected $fillable = [
        'field1',
        'field2',
        'field3',
        'contact_number',
        'field4',
        'field5',
        'email',
    ];
}
