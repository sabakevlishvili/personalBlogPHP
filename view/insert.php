<?php
   if(isset($_POST['insertbutton'])){
      $title = $_POST['title'];
      $paragraph = $_POST['paragraph'];
      $authorname = $_POST['authorname'];
      $sql =  "INSERT INTO content (title, paragraph, authorname)
               VALUES (
                  '$title', 
                  '$paragraph', 
                  '$authorname')";
      mysqli_query($connection, $sql);
      header('Location: ?top=insert');   
   }
?>
<div class="crud">
   <hr>
   <hr>
   <hr>
     <h1>INSERT</h1>
     <form action="" style="padding:20px" method="post">
         Title
         <input type="text" name="title">
         <br>
         <br>
         paragraph
         <br>
         <textarea name="paragraph" cols="30" rows="10"></textarea>
         <br>
         <br>
         authorname
         <br>
         <input name="authorname" cols="30" rows="4"></input>
         <br>
         <br>
         <input type="submit" name="insertbutton" value="INSERT" class="submit-button">
     </form>
</div>