<?php
  include 'db-popo.php';
  include 'db-connection.php';
  include 'db-query.php';

  $res = $conn -> query($queryAllproduct);

  $prodotti = [];
  if ($res && $res -> num_rows > 0) {

    while ($row = $res -> fetch_assoc()) {

      $prodotti[] = new Prodotto($row);
    }
  }

  for ($i=0; $i < sizeof($prodotti) ; $i++) {
    $prodotto = $prodotti[$i];
    echo $prodotto . '<br>';
  }

  $res = $conn -> query($queryProduct);

  $prodottoMax = [];
  if ($res && $res -> num_rows > 0) {

    while ($row = $res -> fetch_assoc()) {

      $prodottoMax[] = new ProdottoPiu($row);
    }
  }

  for ($j=0; $j < sizeof($prodottoMax); $j++) {
    $prodottiMax = $prodottoMax[$j];
    echo $prodottiMax . '<br>';
  }


$conn->close();
 ?>
