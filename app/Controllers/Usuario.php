<?php namespace App\Controllers;

class Usuario extends BaseController
{
	public function index()
	{
		return view('cabezera').view('noticias').view('footer');
	}

	public function categoria(){
		return view('cabezera').view('catalogo').view('footer');
	}

	public function contacto(){
		return view('cabezera').view('contactos').view('footer');
	}

	public function login(){
		return view('login');
	}

	public function registro(){
		return view('registro');
	}
	public function denegado(){
		return view('denegado');
	}

	//--------------------------------------------------------------------

}
