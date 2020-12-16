<?php
 $jubert_jakol = array(
   $_POST['fname'],
   $_POST['lname'],
   $_POST['mi'],
   $_POST['email'],
   $_POST['age']
 );

 $jubert_bayag = fopen('jubertAsshole.csv','a');

 fputcsv($jubert_bayag,$jubert_jakol);

 fclose($jubert_bayag);
 echo "MAGSALSAL KA NA JUBERT";
 ?>
