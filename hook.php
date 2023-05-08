<?php
$verify_token = $_REQUEST['hub_verify_token'];
if ($verify_token === 'bG9xdWVxdWllc') {
    
  $input = json_decode(file_get_contents('php://input'), true);

//var_dump($input);

error_log(print_r($input, true));

 $nombre = $input['nombre'];
 
}else{
    
    echo "Error";
}

?>
