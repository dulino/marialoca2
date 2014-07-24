<?php

class ClientsController extends BaseController
{
	public function __construct()
    {
        $this->beforeFilter('serviceAuth');
        $this->beforeFilter('serviceCSRF');
    }

	public function home()
	{
		$clientes = Client::with('orders')->with('orders.user')->get();
        return Response::json(['clientes' => $clientes->toArray()]);
    }

}