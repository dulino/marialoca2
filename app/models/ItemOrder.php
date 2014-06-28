<?php

class ItemOrder extends Eloquent {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'itemorder';

	public function order()
	{
		return $this->belongsTo('Order');
	}

	public function product()
	{
		return $this->belongsTo('Product');
	}
}
