<?php
namespace App\Controller;

use App\Controller\AppController;

class CitiesController extends AppController
{
  public function index()
  {
    $session = $this->getRequest()->getSession();
    $session->write('igv', 0.18);
  }
  public function index2()
  {
    $session = $this->getRequest()->getSession();
    $session->write('web', 'https://www.unsa.edu.pe/');
    $session->write('Config.language', 'en');
  }
  public function index3()
  {
    $session = $this->getRequest()->getSession();
    $igv = $session->read('igv');
    $web = $session->read('web');

    $this->Flash->success($web);

    $this->set('IGV', $igv);
  }
}