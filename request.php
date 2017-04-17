<?php
// Remove blow comments from header If  you are making calls from another server
/*
header("Access-Control-Allow-Origin: *");
*/
 
header('Content-Type: application/json');
error_reporting(0);
//ini_set('display_errors',1);
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "courier_db";
$q = $_GET['q'];
if(isset($q) || !empty($q)) {
    $con = mysqli_connect($hostname, $username, $password, $dbname);
    $query = "SELECT * FROM postpin WHERE PINCODE LIKE '$q%'";
    $result = mysqli_query($con, $query);
    $res = array();
    while($resultSet = mysqli_fetch_assoc($result)) {
     $res[$resultSet['OFFICENAME']]['OFFICENAME'] =  $resultSet['DIVISIONNAME']."-".$resultSet['REGIONNAME']."-".$resultSet['CIRCLENAME']."-".$resultSet['TALUK']."-".$resultSet['STATENAME'];
     $res[$resultSet['OFFICENAME']]['value'] =  $resultSet['PINCODE'];
    $res[$resultSet['OFFICENAME']]['label'] =  $resultSet['PINCODE'];
 
    }
    if(!$res) {
        $res[0] = 'Not found!';
    }
    echo json_encode($res);
}
 
?>