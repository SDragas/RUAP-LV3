<?php
 $host = "sdragas-mysqldbserver.mysql.database.azure.com";
 $user = "mysqldbuser@sdragas-mysqldbserver";
 $pwd = "Labosi123";
 $db = "ruapdb";
 // $host = "127.0.0.1:52932";
 // $user = "azure";
 // $pwd = "6#vWHD_$";
 // $db = "localdb";
 $conn = mysqli_connect($host,$user,$pwd);
 // Check connection
 if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . myssqli_connect_error();
 }
 else {
 echo 'Connected successfully';
 }
 $sql = 'CREATE Database ruapdb';
 if ($conn->query($sql) === TRUE) {
 echo "Database created successfully";
 } else {
 echo "Error creating database: " . $conn->error;
 }
 mysqli_select_db($conn,$db);
 $sql_create = "CREATE TABLE registration_tbl(id INT NOT NULL
 AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(30), email
 VARCHAR(30), date DATE);";
 if ($conn->query($sql_create) === TRUE) {
 echo "Table registration_tbl created successfully";
 } else {
 echo "Error creating table: " . $conn->error;
 }
 $conn->close();
?>