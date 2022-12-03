<?php 
header("Content-Type: applicaiont/json");
header("Acess-Control-Allow-Origin:*");
header("Acess-Control-Allow-Methods: POST");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Acess-Control-Allow-Methods,Content-Type,Authorization,X-Requested-with");
require("pdo.php");

$db=new database();
$data=json_decode(file_get_contents("php://input"),true);
$name=$data['uname'];
$email=$data['uemail'];
$phn=$data['uphn'];
if($db->insert("user",["name"=>$name,"email"=>$email,"phn"=>$phn])){
    echo json_encode(["message"=>"Data insert successfully","status"=>true]);
}else{
    echo json_encode(["message"=>"Data insert unsuccessfull","status"=>false]);

}

?>