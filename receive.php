<?
//принимаем сообщения пользователей и сохраняем их в файл
$fileopen=fopen("data.txt", "a+");
$write='"'.$_POST["user"].'";"'.$_POST["value"].'"'."\n";

$response=array();
$response["status"]="ok";
$response["data"]=$_POST;
echo json_encode((object) $response);

fwrite($fileopen,$write);
fclose($fileopen);
?>