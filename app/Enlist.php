<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Enlist extends Model
{
    protected $table = 'enlist';
    protected $fillable = [
        'surname',
        'firstname',
        'middlename',
        'suffix',
        'birthDate'
    ];
}
