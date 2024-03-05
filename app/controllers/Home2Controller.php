<?php 
class Home2Controller extends Controller
{
  public function __construct()
  {
    checkIsNotLogin();
  }

  public function index()
  {
    $this->view('home2');
  }
}
