<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Item extends Eloquent  {
    protected $table = 'items';

    public function users(){
        return $this->belongsToMany('User', 'carts', 'item_id','user_id');
    }
}
