 <?php 
 $html = $_POST['content']; 
 $to = "tim@tbobker.com"; 
$subject = "Campaign Order Details"; 
// Always set content-type when sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
// More headers 
$headers .= 'From: <webmaster@example.com>' . "\r\n"; 
$headers .= 'Cc: myboss@example.com' . "\r\n"; 
mail($to,$subject,$message,$headers); 
 ?>
