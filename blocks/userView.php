<div  class="personalblog-container">
         <?php
            $query = "SELECT * FROM content";
            $result = mysqli_query($connection, $query);
            if(!$result){
               die ("Error!!"); 
            }  
            while($row = mysqli_fetch_assoc($result)){
               if(!isset($_GET['cat'])){
               echo "<h1 class='personalblog-title'><a href='?cat=".$row["title"]."'>".$row["title"]."</a></h1 >";
               echo "<div>".$row["paragraph"]."</div>";
               }
            if(isset($_GET['cat'])){
               include "view/select.php"; 
            }
            }
         ?>
      </div>