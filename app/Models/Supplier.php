<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected  $fillable = ['supplier_name',
            'supplier_phone_no',
            'supplier_email_no',
            'supplier_address',
            'supplier_pincode',
            'status'];
}
