<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customerDetails extends Model
{
    use HasFactory;
    protected $table = 'customer_details';
    protected $fillable = ['name','mid','age','gender','phone_number','whatsapp_number','email','family_members','month_year','contribution','donation','details','description'];
    public $timestamps = false;
}
