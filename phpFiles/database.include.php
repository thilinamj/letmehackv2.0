<?php
/**
 * Created by PhpStorm.
 * User: Nayana Madhuwantha
 * Date: 1/6/2020
 * Time: 11:24 PM
 */

return $conn = mysqli_connect('localhost','root','','letmehack_letmehackweb');

if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}
