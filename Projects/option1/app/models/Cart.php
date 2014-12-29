<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Cart extends Eloquent  {
    protected $table = 'carts';

    public function users() {
        return $this->belongsToMany('User');
    }

    public function items() {
        return $this->belongsToMany('Item');
    }
}
