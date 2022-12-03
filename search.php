<?php 
header("Content-Type: applicaiont/json");
header("Acess-Control-Allow-Origin: *");
require("pdo.php");

$db=new database();
$data=json_decode(file_get_contents("php://input"),true);
$kval=$data['keyvalue'];
$db->select('user',null,null,"name like '%$kval%'",null,null);
$res=$db->show_result();
if(count($res[0]) > 0){
  echo json_encode($res[0]);

}else{
  echo json_encode(["message"=>"No record found.!","status"=>false]);
}

?>