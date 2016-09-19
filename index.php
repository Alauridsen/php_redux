<?php require_once("db_const.php");  
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
$connection->set_charset("utf8");  
if ($connection->connect_error) {
						die('Connect Error: ' . $connection->connect_error);
						} else {
						echo '<span class="hint">[Successful connection to MySQL database!]</span>';
						}
?> 
	<!doctype html> 
    	<html> 
        	<head> 
            	<meta charset="utf-8"> 
                <title>Chuck Norris Facts</title> 
                <link rel="stylesheet" type="text/css" href="css/styles.css">	 
            </head>
       	    <body>     	 
            	<header> <?php 
				if ($connection->connect_error) {
						die('Connect Error: ' . $connection->connect_error);
						} else {
						echo '<span class="hint">[Successful connection to MySQL database!]</span>';
						}
				?> 
                	<h1>Chuck Norris Facts</h1>
        	   </header>
         <?php 
		 $data = $connection->query("SELECT * FROM jokes"); 
		 while($sqlresult = $data->fetch_assoc()) {
		 ###############################################################################################
		 # Oh my god - I need a way to render ALL records from the database, not only the last one :-( #
		 # This makes me sick...                                                                       # 
		 ###############################################################################################
		
			echo '<div class="joke">
			 <img src="' . $sqlresult['img'] . '" alt="Chuck Norris caricature" width="150px">
			 <h2>' . $sqlresult['joke'] .  '</h2>	   
			 </div>';
		 }
		 ?>  

			</body> 

		</html>