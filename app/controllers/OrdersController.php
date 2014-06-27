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
		$ordersOriginal = Order::with('client')
								->with('product')
								->with('user')
								->where('product_id','=','1')
								->get();
		$ordersTrigo    = Order::with('client')
								->with('product')
								->with('user')
								->where('product_id','=','2')
								->get();
        return Response::json(['ordersOriginal' => $ordersOriginal->toArray(), 'ordersTrigo' => $ordersTrigo->toArray()]);
    }
}