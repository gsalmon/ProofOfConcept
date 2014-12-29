<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class Payment extends Eloquent  {
    protected $table = 'transactions';
    protected $fillable = array('amount', 'user_id', 'token','token_type', 'email');
    public function users(){
        return $this->belongsToMany('User');
    }
}
