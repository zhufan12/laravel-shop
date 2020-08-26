<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at'
    ];

    protected $dates = ['last_user_at'];

    public function user(){
        $this->belongTo(User::class);
    }

    public function getFullAddressAttribute(){
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}
