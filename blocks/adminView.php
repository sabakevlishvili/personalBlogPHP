      <div class="personalblog-container">
         <?php
            $query = "SELECT * FROM content";
            $result = mysqli_query($connection, $query);
            if(!$result){
               die ("Error!!"); 
            }  
            while($row = mysqli_fetch_assoc($result)){
               echo "<h1 class='personalblog-title'><a href='?cat=".$row["title"]."'>".$row["title"]."</a></h1 >";
               
            }
         ?>

            
<?php
      if(isset($_GET['top']) && $_GET['top']=="insert"){
         include "view/insert.php"; 
      }else if(isset($_GET['top']) && $_GET['top']=="delete"){
         include "view/delete.php"; 
      }else if(isset($_GET['top']) && $_GET['top']=="update"){
         include "view/update.php"; 
      }else if(isset($_GET['id']) && $_GET['id']!=""){
         include "view/edit.php"; 
      }else{
         include "view/select.php"; 
      }
   ?>
      </div>

