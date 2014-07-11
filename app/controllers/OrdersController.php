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


	public function deletaItemPedido($id)
	{
		$itemPedido = ItemOrder::find($id);

		if(!$itemPedido)
			return false;

		$order_id = $itemPedido->order_id;
		$itemPedido->delete();

		$total = ItemOrder::where('order_id', '=', $order_id)->count();

		if ($total == 0) {
			$pedido = Order::find($order_id);
			$pedido->delete();
		}


	}

	public function alteraStatusItemPedido($id, $status)
	{
		$itemPedido = ItemOrder::find($id);

		if(!$itemPedido)
			return false;

		$itemPedido->status = $status;
		$itemPedido->save();
	}

}