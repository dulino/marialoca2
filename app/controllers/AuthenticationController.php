<?php

class AuthenticationController extends BaseController
{

	public function login()
	{
		$credentials = array(
		            'email'    =>  Input::get('email'),
		            'password' =>  Input::get('password')
		            );
        if ( Auth::attempt($credentials) ) {
            return Response::json(['user' => Auth::user()->toArray()], 202);
        }else{
            return Response::json(['flash' => 'Falha na autenticação'], 401);
        }
    }

	public function logout()
	{
		Auth::logout();
        return Response::json(['flash' => 'Você foi desconectado'], 200);
    }
}