<?php

class Client extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'clients';

	public $timestamps = false;

	public function orders()
	{
		return $this->hasMany('Order');
	}

    public function items()
    {
        return $this->hasManyThrough('ItemOrder', 'Order', 'client_id', 'order_id');
    }
}
