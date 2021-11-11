<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserForm extends Model
{
    use HasFactory;

    protected $table = 'user_form_data';
    protected $fillable=["contact_name","commodity","type","phone","from","to","email","load","shipment","Notations"];
}
