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
        $clientes = DB::table('clients')
            ->select(DB::raw('clients.id, clients.nome, clients.email, clients.sexo, count(orders.id) as pedidos, sum(valor_pedido) as valorTotal'))
            ->leftJoin('orders', 'clients.id', '=', 'orders.client_id')
            ->groupBy('clients.id', 'clients.nome', 'clients.email', 'clients.sexo')
            ->get(array('clients.id, clients.nome, clients.email, clients.sexo, pedidos, valorTotal'));
        

        return Response::json(['clientes' => $clientes]);
    }

}