<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'city', 'company', 'name', 'execution_date', 'is_active',
    ];

    protected $table = 'projects';
    protected $primaryKey = 'id';

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
