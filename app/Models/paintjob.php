<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paintjob extends Model
{
    use HasFactory;


    protected $table = 'paintjob';

    protected $primaryKey ='paintjob_id';

    protected $fillable = ['plat','current','target'];


    public $timestamps = false;

}
