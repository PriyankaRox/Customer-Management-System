<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'lid';
    //protected $table = 'locations';
    //public $timestamps = true;

    

    protected $fillable = [
        'name',
        'street',
        'address',
        'city',
        'pin',
        'contact_person',
        'mobile',
        'created_at'
    ];

    protected $table = 'locations';

public function CreatedBy()
    {
        return $this->belongsTo('App\Location', 'created_user_lid');
    }

}
