<?php 
    $user = 'root';
   
    $db = new PDO( 'mysql:host=localhost;dbname=attendance', $user );
    $sql = "SELECT * FROM details";
    $query = $db->prepare( $sql );
    $query->execute();
    $results = $query->fetchAll( PDO::FETCH_ASSOC );

   
	 ?>
	 <body bgcolor="brickred">
	 <center>
	 <br><br><br><br>
	 <h2> REPORTS </h2>
 <table border="1"class="table">
   <tr>
     <th>Username</th>
     <th>Email</th>
	 <th>Message</th>
   </tr>
   <?php foreach( $results as $row ){
   echo "<tr><td>";
     echo $row['username'];
     echo "</td><td>";
     echo $row['email'];
     echo "</td><td>";
     echo $row['message'];
     echo "</td>";
   echo "</tr>";
   }
 ?>
 </table>
 </center>
 </body>