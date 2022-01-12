<?php 
// require_once('src/Main.php');
use App\Main;
require_once('vendor/autoload.php');



 $n=new Main();
echo $n->getQuotes()['behali'];
echo " : ";
echo $n->getQuotes()['behil'];



 ?>