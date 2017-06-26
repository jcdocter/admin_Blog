<?php
/**
 * Created by PhpStorm.
 * User: Joey
 * Date: 12-6-2017
 * Time: 13:32
 */
$user = 'root';
$password = '';

try{
    $conn = new PDO("mysql:host=localhost;dbname=administratie", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo $e;
}