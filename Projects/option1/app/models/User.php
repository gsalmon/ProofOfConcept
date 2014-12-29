<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Laravel\Cashier\BillableTrait;
use Laravel\Cashier\BillableInterface;

class User extends Eloquent implements UserInterface, BillableInterface {

    use BillableTrait;
    use UserTrait, RemindableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    protected $dates = ['trial_ends_at', 'subscription_ends_at'];

    public function items()
    {
        return $this->belongsToMany('Item', 'carts', 'user_id', 'item_id' );
    }

    public function cart()
    {
        return $this->hasMany('Cart');
    }
}
