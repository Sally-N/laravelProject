<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FailedJobs extends Model
{
    //Table Name
    protected $table = 'FailedJobs';
    //Primary key
    public $primarykey = 'id';
    //Timestamps
    public $timestamps = true;
}