<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use View;

/**
 * class IndexController 
 * @author Tretyakov Pavel <tretjakov.pavel@gmail.com>
 * @copyright 2015 tretyakovpavel.ru
 */
class IndexController extends Controller
{

	/**
	 * Обработка главное страницы сайта
	 * @return void: Рендерит шаблон incex.blade.php
	 */
	public function index()
	{
		return View::make('index');
	}

}
