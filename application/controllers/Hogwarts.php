<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hogwarts extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';

		// build the list of authors, to pass on to our view
		$source = $this->quotes->all();
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;

		$this->render();
	}

	public function shucks() 
	{
			$src = $this->quotes->all();
            $quoteArray = $this->quotes->get('2');
            echo $quoteArray['what'];
	}

	public function random() {
		// this is the view we want shown
		$this->data['pagebody'] = 'homepage';
		// Generate random index
		$randomIndex = mt_rand(1,7);
		$source = array();
		// Add random author to array
		array_push($source, $this->quotes->get($randomIndex));
		$authors = array ();
		foreach ($source as $record)
		{
			$authors[] = array ('who' => $record['who'], 'mug' => $record['mug'], 'href' => $record['where']);
		}
		$this->data['authors'] = $authors;
		$this->render();
	}

}
