<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'dob',
        'gender',
        'email',
        'mobile',
        'address',
        'city',
        'pin',
        'state',
        'country',
        'adhar_number',
        'religion',
        'caste',
        'category',
        'emergency_contacts',
        'created_user_cid',
    ];

    protected $table = 'customers';

    public function CreatedBy()
    {
        return $this->belongsTo('App\Customer', 'created_user_id');
    }
}
