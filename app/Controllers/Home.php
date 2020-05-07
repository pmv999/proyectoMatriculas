<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		/* return view('welcome_message'); */
		return view('loggin');/* Si solo se va a mostrar una vista */
		/* para mostrar varias vistas se lo ara de la siguiente manera */
		/* echo view('header');/* cabecera */
		/* echo view('loggin');/* contenido */
		/* echo view('footer');/* pie */ 
	}

	//--------------------------------------------------------------------

}
