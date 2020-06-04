<div>
      <?php
         if(isset($_GET["cat"]))
         {
            echo "<div class='post-title'>".$_GET["cat"]."</div>";
            $cat = $_GET["cat"];
            $query = "SELECT * FROM content WHERE title='$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            ?>
            <p>
               <?=$row['paragraph']?>
            </p>
            <div>
               <?=$row['authorname']?>
            </div>
            <?php
         }
      ?>
</div>