<?php

class UsersController extends BaseController
{
	public function __construct()
    {
        $this->beforeFilter('serviceAuth');
        $this->beforeFilter('serviceCSRF');
    }

	public function home()
	{
//		$usuarios = User::with('orders')->get();

    $usuarios = DB::table('users')
            ->select(DB::raw('users.id, users.nome, users.email, count(orders.id) as pedidos, sum(valor_pedido) as valorTotal'))
            ->leftJoin('orders', 'users.id', '=', 'orders.user_id')
            ->groupBy('users.id', 'users.nome', 'users.email')
            ->get(array('users.id, users.nome, users.email, pedidos, valorTotal'));

        return Response::json(['usuarios' => $usuarios]);
    }

    public function pedidosPorUsuario($id)
    {
        $usuario = User::with('orders')
                           ->with('orders.items')
                           ->with('orders.client')
                           ->find($id);

        return Response::json(['usuario' => $usuario->toArray()]);
    }
}