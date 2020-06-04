<?php
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      // echo $id;
      $sql_edit = "SELECT * FROM content WHERE id=$id";
      $result = mysqli_query($connection, $sql_edit);
      $row = mysqli_fetch_assoc($result);
      // var_dump($row);
   } 
   if(isset($_POST['updatebutton'])){
      $id = $_POST['id'];
      $title = $_POST['title'];
      $paragraph = $_POST['paragraph'];
      $authorname = $_POST['authorname'];
      $sql_update = "UPDATE content SET 
                                  title='$title', 
                                  paragraph='$paragraph', 
                                  authorname='$authorname'
                     WHERE id=$id";
      mysqli_query($connection, $sql_update);
      header('Location: ?top=update');               
   }     
?>
<div class="crud">
     <h1>Edit Blog Post</h1>
     <form action="" style="padding:20px" method="post">
         Title
         <input type="text" name="title" value="<?=$row['title']?>">
         <br>
         <br>
         paragraph
         <br>
         <textarea name="paragraph" cols="30" rows="10"><?=$row['paragraph']?></textarea>
         <br>
         <br>
         authorname
         <br>
         <textarea name="authorname" cols="30" rows="4"><?=$row['authorname']?></textarea>
         <br>
         <br>
         <input type="hidden" name="id" value="<?=$row['id']?>">
         <input type="submit" name="updatebutton" value="UPDATE">
     </form>
</div>