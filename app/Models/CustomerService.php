<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerService extends Model
{
    use HasFactory;
    protected $fillable=['customer_id', 'bank_service_id', 'status', 'active_date'];
}
