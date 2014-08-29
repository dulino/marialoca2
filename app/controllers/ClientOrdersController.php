<?php

class ClientOrdersController extends BaseController
{
	public function __construct()
    {
        $this->beforeFilter('serviceAuth');
        $this->beforeFilter('serviceCSRF');
    }

	public function home($id)
	{
        $cliente = Client::with('orders')
                           ->with('orders.items')
                           ->with('orders.user')
                           ->find($id);

        return Response::json(['cliente' => $cliente->toArray()]);
    }
}