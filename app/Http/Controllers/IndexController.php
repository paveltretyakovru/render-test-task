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
		$html 		= new \Htmldom('http://transdir.ru/');
		$weather 	= $html->getElementById('tabs-0');
		$divs 	 	= $weather->children();
		
		$info 		= [
			'status' 		=> ['value' => strip_tags($divs[0]->outertext()) , 'desc' => 'Состояние'],
			'sky'			=> ['value' => strip_tags($divs[1]->outertext()) , 'desc' => 'Небо'],
			'temperature'	=> ['value' => strip_tags($divs[2]->outertext()) , 'desc' => 'Температура'],
			'wind'			=> ['value' => strip_tags($divs[3]->outertext()) , 'desc' => 'Ветер'],
			'route'			=> ['value' => strip_tags($divs[4]->outertext()) , 'desc' => 'Направление'],
		];

		return View::make('index' , compact('info'));
	}

}
