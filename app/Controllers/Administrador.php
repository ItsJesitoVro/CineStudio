<?php namespace App\Controllers;

use App\Models\bd_model;
use App\Models\noticias_terror;
use App\Models\noticias_romance;
use App\Models\noticias_comedia;
use App\Models\noticias_accion;

class Administrador extends BaseController
{
	public function blog()
	{
		$request = \Config\Services::request();
		$usuario = $request -> getPost('email');
		$contrasenia = $request -> getPost('password');

		$dato = [
			'usuario' => $usuario,
			'contrasenia' => $contrasenia
		];

		$modelito = new bd_model($db);
		$modelito -> insert($dato);
		return view('cabezeraAdmin').view('seleccion').view('footer');
	}
	public function blog_terror(){
		return view('cabezeraAdmin').view('redaccion').view('footer');
	}

	public function blog_romance(){
		return view('cabezeraAdmin').view('redaccion_romance').view('footer');
	}
	public function blog_accion(){
		return view('cabezeraAdmin').view('redaccion_accion').view('footer');
	}
	public function blog_comedia(){
		return view('cabezeraAdmin').view('redaccion_comedia').view('footer');
	}

    public function index()
	{
		$request = \Config\Services::request();
		$titulo = $request -> getPost('titulo');
		$contenido = $request -> getPost('contenido');
		$autor = $request -> getPost('autor');
		$fecha = $request -> getPost('fecha');
		$imagen = $request -> getPost('imagen');


		$dato2 = [
			'titulo' => $titulo,
			'contenido' => $contenido,
			'autor' => $autor,
			'fecha' => $fecha,
			'imagen' => $imagen
		];

		$modelito2 = new noticias_terror($db);
		$modelito2 -> insert($dato2);
		return view('cabezeraAdmin').view('noticias').view('footer');
	}

public function index_romance()
	{
		$request = \Config\Services::request();
		$titulo = $request -> getPost('titulo');
		$contenido = $request -> getPost('contenido');
		$autor = $request -> getPost('autor');
		$fecha = $request -> getPost('fecha');
		$imagen = $request -> getPost('imagen');

		$dato3 = [
			'titulo' => $titulo,
			'contenido' => $contenido,
			'autor' => $autor,
			'fecha' => $fecha,
			'imagen' => $imagen
		];

		$modelito3 = new noticias_romance($db);
		$modelito3 -> insert($dato3);
		return view('cabezeraAdmin').view('noticias').view('footer');
	}

	public function index_accion()
	{
		$request = \Config\Services::request();
		$titulo = $request -> getPost('titulo');
		$contenido = $request -> getPost('contenido');
		$autor = $request -> getPost('autor');
		$fecha = $request -> getPost('fecha');
		$imagen = $request -> getPost('imagen');


		$dato4 = [
			'titulo' => $titulo,
			'contenido' => $contenido,
			'autor' => $autor,
			'fecha' => $fecha,
			'imagen' => $imagen
		];

		$modelito4 = new noticias_accion($db);
		$modelito4 -> insert($dato4);
		return view('cabezeraAdmin').view('noticias').view('footer');
	}

	public function index_comedia()
	{
		$request = \Config\Services::request();
		$titulo = $request -> getPost('titulo');
		$contenido = $request -> getPost('contenido');
		$autor = $request -> getPost('autor');
		$fecha = $request -> getPost('fecha');
		$imagen = $request -> getPost('imagen');


		$dato5 = [
			'titulo' => $titulo,
			'contenido' => $contenido,
			'autor' => $autor,
			'fecha' => $fecha,
			'imagen' => $imagen
		];

		$modelito5 = new noticias_comedia($db);
		$modelito5 -> insert($dato5);
		return view('cabezeraAdmin').view('noticias').view('footer');
	}

	public function categoria(){
		return view('cabezeraAdmin').view('catalogo').view('footer');
	}

	public function contacto(){
		return view('cabezeraAdmin').view('contactos').view('footer');
	}
	//--------------------------------------------------------------------

}