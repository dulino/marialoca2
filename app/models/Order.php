<?php

class Order extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'orders';

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function client()
	{
		return $this->belongsTo('Client');
	}

	public function product()
	{
		return $this->belongsTo('Product');
	}
}
