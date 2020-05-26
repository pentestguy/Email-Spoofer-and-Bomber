<?php
session_start();
$to = $_POST["to"]; // 'akashranjanpatel@outlook.com';
$Subject = $_POST["subject"]; //'test';
$txt = $_POST["message"]; // 'test';
$from = $_POST["from"];
$count = $_POST["count"];
$str='From: '.$Subject.' <'.$from.'>';
$headers = array(
    'Content-type: text/html; charset=iso-8859-1',
        $str,
        'X-Mailer: PHP/' .phpversion()
);

if($_POST["password"]=="pentestguy.in"){
  for($i=0;$i<=$count;$i++){
    mail($to, $Subject, $txt, implode("\n",$headers));
    
}  
 $_SESSION["success"]="1";
 header("location:mailhome.php");
}else{
    $_SESSION["passerror"]="1";
     header("location:mailhome.php");
}




?>