<?php

class Mobile extends Controller
{
  public function index()
  {
    $this->view('mobile/index');
  }

  public function credentials()
  {
    $this->view('mobile/credentials');
  }

  public function home()
  {
    $this->view('mobile/home');
  }
  
  public function notifs()
  {
    $this->view('mobile/notifs');
  }
}