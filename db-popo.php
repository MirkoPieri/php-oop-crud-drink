<?php

class Prodotto {
  private $id;
  private $nome;
  private $marca;
  private $scadenza;
  private $prezzo;

  public function __construct($row) {

    $this -> setId($row['id']);
    $this -> setNome($row['nome']);
    $this -> setMarca($row['marca']);
    $this -> setScadenza($row['scadenza']);
    $this -> setPrice($row['prezzo']);

  }

  public function getId() {
    return $this -> id;
  }

  public function setId($id) {
    $this -> id = $id;
  }

  public function getNome() {
    return $this -> nome;
  }

  public function setNome($nome) {
    $this -> nome = $nome;
  }

  public function getMarca() {
    return $this -> marca;
  }

  public function setMarca($marca) {
    $this -> marca = $marca;
  }

  public function getScadenza() {
    return $this -> scadenza;
  }

  public function setScadenza($scadenza) {
    $this -> scadenza = $scadenza;
  }

  public function getPrice() {
    return $this -> prezzo;
  }

  public function setPrice($prezzo) {
    $this -> prezzo = $prezzo;
  }

  public function __toString() {

    return  $this -> getId() . ' ' .
            $this -> getNome() . ' ' .
            $this -> getMarca() . ' ' .
            $this -> getScadenza() . ' ' .
            $this -> getPrice(). ' euro' . ' <br>';
  }

}


?>
