<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'name', 'email', 'phone', 'address', 'message'
    ];
    public function getId(){
        return $this->attributes['id'];
    }

    public function setId($id){
    $this->attributes['id'] = $id;
    }
    public function getName(){
    return $this->attributes['name'];

    }
    public function setName($name){
        $this->attributes['name'] = $name;
    }
    public function getEmail(){
        return $this->attributes['email'];
    }
    public function setEmail($email){
        $this->atrributes['email'] = $email;
    }
    public function getPhone(){
        return $this->attributes['phone'];
    }
    public function setPhone($phone){
        $this->atrributes['phone'] = $phone;
    }
        public function getAddress(){
        return $this->attributes['address'];
    }
    public function setAddress($address){
        $this->atrributes['address'] = $address;
    }
}
