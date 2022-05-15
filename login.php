<?php

if (isset($_POST['button'])){

if(isset($_post['email']) , isset($_post['password'])){
    header('location : ana_sayfa.html');
}
echo $_post['password'];
}
?>
