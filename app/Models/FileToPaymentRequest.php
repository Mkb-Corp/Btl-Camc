<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileToPaymentRequest extends Model
{
    use HasFactory;

    protected $fillable = ['file_id', 'payment_request_id'];
}
