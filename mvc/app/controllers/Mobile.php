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
}