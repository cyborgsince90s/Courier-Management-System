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
$dbname = "pincodes";
$q = $_GET['q'];
if(isset($q) || !empty($q)) {
    $con = mysqli_connect($hostname, $username, $password, $dbname);
    $query = "SELECT * FROM pincodes WHERE pincode LIKE '$q%'";
    $result = mysqli_query($con, $query);
    $res = array();
    while($resultSet = mysqli_fetch_assoc($result)) {
     $res[$resultSet['id']]['id'] =  $resultSet['divisionname']."-".$resultSet['regionname']."-".$resultSet['circlename']."-".$resultSet['taluk']."-".$resultSet['statename'];
     $res[$resultSet['id']]['value'] =  $resultSet['pincode'];
    $res[$resultSet['id']]['label'] =  $resultSet['pincode'];
 
    }
    if(!$res) {
        $res[0] = 'Not found!';
    }
    echo json_encode($res);
}
 
?>