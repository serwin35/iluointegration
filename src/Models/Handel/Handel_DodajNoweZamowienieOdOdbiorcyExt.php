<?php

namespace serwin35\IluoIntegration\Models\Handel;

class Handel_DodajNoweZamowienieOdOdbiorcyExt{

  protected $sessionId;

  protected $zamowienie;

  protected $parametry;

  public function __construct($sessionId, $zamowienie, $parametry)
  {
    $this->sessionId        = $sessionId;
    $this->zamowienie       = $zamowienie;
    $this->parametry        = $parametry;
  }

  public function getSessionId()
  {
    return $this->sessionId;
  }

  public function getZamowienie()
  {
    return $this->zamowienie;
  }

  public function getParametry()
  {
    return $this->parametry;
  }
}

class Handel_DodajNoweZamowienieOdOdbiorcyExtResponse
{

  protected $Handel_DodajNoweZamowienieOdOdbiorcyExtResult;

  public function __construct($Handel_DodajNoweZamowienieOdOdbiorcyExtResult)
  {
    $this->Handel_DodajNoweZamowienieOdOdbiorcyExtResult = $Handel_DodajNoweZamowienieOdOdbiorcyExtResult;
  }

  public function get()
  {
    return $this->Handel_DodajNoweZamowienieOdOdbiorcyExtResult;
  }
}
