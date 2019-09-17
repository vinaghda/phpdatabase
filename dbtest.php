<?php
   $host        = getenv("databaseip");
   $port        = getenv("databaseport");
   $dbname      = getenv("databasename");
   $dbuser      = getenv("databaseuser");
   $dbpwd       = getenv("databasepassword");
   
   $db = pg_connect( "$host $port $dbname $dbuser $dbpwd"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
