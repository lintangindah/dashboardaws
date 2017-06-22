<?php
/**
 * Created by PhpStorm.
 * User: Lenovo
 * Date: 6/20/2017
 * Time: 3:01 PM
 */

$servername = "10.40.1.214";

$username = "lintang";

$password = "marialintang";

$dbname ="semar";

$port = 3306;


$con = new mysqli($servername,$username,$password,$dbname,$port);
if ($con->connect_error) {
    die ("Koneksi Gagal :". $con->connect_error);
}

$sql = "(SELECT (UNIX_TIMESTAMP (time)*1000) AS time , WSAVG2M AS WSAVG2M FROM aws_sadeng ORDER BY time DESC LIMIT 20) ORDER BY time ASC";
$result = $con->query($sql);

if ($result->num_rows>0){
    $count =0;
    echo '[';
    while($row=$result->fetch_assoc()){
        echo '['.$row["time"].',' .$row["WSAVG2M"].']' ;
        $count++;
        if ($count<"20"){
            echo ',';
        }
    }
    echo ']';
}else{
    echo "<pre>";
    echo "[[],[]] ";

}
$con->close();
?>