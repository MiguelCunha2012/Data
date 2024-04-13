<?php
  function imprimirDatas ($dataInicial, $dataFinal){
    $dataInicial = new DateTime ($dataInicial);
    $dataFinal = new DateTime ($dataFinal);
      while ($dataInicial <= $dataFinal) {
        echo $dataInicial -> format ('d/m/Y') . "<br>";
        $dataInicial -> add (new DateInterval('P1D'));
      }
  }
    imprimirDatas ("2024-04-21","2024-04-29");
?>  