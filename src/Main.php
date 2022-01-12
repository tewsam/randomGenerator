<?php 
namespace Awra;
class Main{

public function getQuotes(){

$c= file_get_contents(__DIR__ .'/../quoates/q.json');
$j=json_decode($c, true);
$randQuoate=mt_rand(0, count($j)-1);
return $j[$randQuoate];


}

}






 ?>