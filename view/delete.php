<?php
      $query = "SELECT id, title FROM content";
      $result = mysqli_query($connection, $query);
      if(isset($_GET['remove'])){
         $remove = $_GET['remove'];
         $delete_query = "DELETE FROM content WHERE id='$remove'";
         mysqli_query($connection,  $delete_query);
      }  
?>
<div class="crud">
   <hr>
   <hr>
   <hr>
      <h1>DELETE</h1>
      <?php
         while($row = mysqli_fetch_assoc($result)){
            if($row["title"]==""){
               $row["title"] = "delete me!!!";
            }
            echo "<h1><a href='?top=delete&remove=".$row["id"]."'>".$row["title"]."</a></h1>";
         }
      ?>
</div>