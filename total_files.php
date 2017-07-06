<?php
   $dbhost = "localhost:3036";
   $dbuser = "root";
   $dbpass = "rootpassword";
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die("Could not connect: " . mysql_error());
   }
   
   $sql = "select COUNT(*) from FILE_DETAILS;";
   mysql_select_db("probuddyDB");
   $retval = mysql_query( $sql, $conn );
   echo "$retval";
   
   if(! $retval ) {
      die("Could not get data: " . mysql_error());
   }
   else{
      echo "$retval";
   }
   
   // while($row = mysql_fetch_assoc($retval)) {
   //    echo "EMP ID :{$row['emp_id']}  <br> ".
   //       "EMP NAME : {$row['emp_name']} <br> ".
   //       "EMP SALARY : {$row['emp_salary']} <br> ".
   //       "--------------------------------<br>";
   // }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>