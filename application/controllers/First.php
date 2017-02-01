<?php
class First extends CI_Controller {

    public function index()
    {
        $record = $this->quotes->get('1');
        echo $record['what'];
    }

    public function zzz(){
        $record = $this->quotes->get('1');
        echo $record['what'];
    }
}