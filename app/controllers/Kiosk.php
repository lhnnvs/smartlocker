<?php

class Kiosk extends Controller
{
  public function index()
  {
    $this->view('kiosk/index');
  }

  public function rent()
  {
    $this->view('kiosk/rent');
  }

  public function gcash()
  {
    $this->view('kiosk/gcash');
  }

  public function cash()
  {
    $this->view('kiosk/cash');
  }

  public function setpin()
  {
    $this->view('kiosk/setpin');
  }

  public function qr()
  {
    $this->view('kiosk/qr');
  }
}