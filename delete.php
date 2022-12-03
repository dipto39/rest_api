<?php 
header("Content-Type: applicaiont/json");
header("Acess-Control-Allow-Origin: www.abc.com");
header("Acess-Control-Allow-Methods: DELETE");
header("Acess-Control-Allow-Headers: Acess-Control-Allow-Headers,Acess-Control-Allow-Methods,Content-Type,Authorization,X-Requested-with");
require("pdo.php");

$db=new database();
$data=json_decode(file_get_contents("php://input"),true);
$id=$data['uid'];

if($db->delete("user","id =$id")){
    echo json_encode(["message"=>"Data Delete successfully","status"=>true]);
}else{
    echo json_encode(["message"=>"Data Delete unsuccessfull","status"=>false]);

}

?>