<?php
namespace App\Controller;
use App\Controller\AppController;
class CocktailsController extends AppController
{
	public $paginate = [
		'page' => 1,
		'limit' => 20,
		'maxLimit' => 100,
		'fields' => [
			'id', 'name', 'description'
		],
		'sortWhitelist' => [
			'id', 'name', 'description'
		]
	];
}