<?php 
header("Content-Type: applicaiont/json");
header("Acess-Control-Allow-Origin:*");
header("Acess-Control-Allow-Methods: PUT");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Acess-Control-Allow-Methods,Content-Type,Authorization,X-Requested-with");
require("pdo.php");

$db=new database();
$data=json_decode(file_get_contents("php://input"),true);
$id = $data['uid'];
$name=$data['uname'];
$email=$data['uemail'];
$phn=$data['uphn'];
if($db->update("user",["name"=>$name,"email"=>$email,"phn"=>$phn],"id = $id")){
    echo json_encode(["message"=>"Data update successfully","status"=>true]);
}else{
    echo json_encode(["message"=>"Data UPdate unsuccessfull","status"=>false]);

}

?>