<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Index_user extends Controller {
    public function index() {
        echo view('index_user');
    }
}