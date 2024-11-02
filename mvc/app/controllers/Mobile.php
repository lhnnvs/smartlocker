<?php

class Mobile extends Controller
{
  public function index()
  {
    $this->view('mobile/index');
  }

  public function contact()
  {
    $this->view('mobile/contact');
  }
  
  public function terms()
  {
    $this->view('mobile/terms');
  }

  public function home()
  {
    $this->view('mobile/home');
  }
  
  public function notifications()
  {
    $this->view('mobile/notifications');
  }

  public function terminate()
  {
    $this->view('mobile/terminate');
  }

  public function access()
  {
    $this->view('mobile/access');
  }

  public function verify()
  {
    $this->view('mobile/verify');
  }

  public function error()
  {
    $this->view('mobile/error');
  }
}