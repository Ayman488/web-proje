<?php
if(isset ($_POST['username']) && isset( $_POST['password']))
{
    echo "hoş geldiniz  ";
    echo $_POST['password'];
    echo "   girişiniz başarlı oldu!";
}
if(empty($_POST['username'])){
    echo 'please inter ther username!';

}