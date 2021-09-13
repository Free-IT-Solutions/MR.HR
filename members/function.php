<?php
function setDate($date){
    $getdate = str_replace(',', '-', $date);
    $setDate=date("Y-m-d", strtotime($getdate) );
    return $setDate;
  }

  function showDate($date){
    $getdate = str_replace('-', '/', $date);
    $getdate=date("m/d/Y", strtotime($getdate) );
    return $getdate;
  }


  echo showDate('2021-09-17');
?>
