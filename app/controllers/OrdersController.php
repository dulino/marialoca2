<?php

class OrdersController extends BaseController
{
	public function __construct()
    {
        $this->beforeFilter('serviceAuth');
        $this->beforeFilter('serviceCSRF');
    }

	public function home()
	{
		$ordersOriginal = ItemOrder::with('order')
							->with('order.client')
							->with('product')
							->with('order.user')
							->where('product_id','=','1')
							->get();
		$ordersTrigo = ItemOrder::with('order')
							->with('order.client')
							->with('product')
							->with('order.user')
							->where('product_id','=','2')
							->get();
        return Response::json(['ordersOriginal' => $ordersOriginal->toArray(), 'ordersTrigo' => $ordersTrigo->toArray()]);
    }
}