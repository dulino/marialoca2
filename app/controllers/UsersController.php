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
		$usuarios = User::with('orders')->get();
        return Response::json(['usuarios' => $usuarios->toArray()]);
    }

}