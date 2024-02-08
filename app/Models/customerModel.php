<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerModel extends abstractLogModel
{
    use HasFactory;

    protected $table = 'tbl_customers';
    public $primaryKey='id';
    protected $fillable=[
        'customer_name',
        'address'
    ];
}
