<?php
if (isset($_POST['add'])) {
    include_once 'db.php';
    
    $username = $_POST['user'];
    $message = $_POST['message'];
    $id_przepisu = $_SESSION['id'];
    $login = $_SESSION['login'];
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO komentarze (username, message, date,id_przepisu,login) VALUES ('$username', '$message','$date','$id_przepisu','$login')";
    $stmt = $conn->prepare($sql);
       

    $stmt->execute();
    $comment_id = $stmt->insert_id;


    $sql_sel = "SELECT * FROM komentarze WHERE id_kom = $comment_id AND id_przepisu=$id_przepisu ";
    
    $result = $conn->query($sql_sel);
    
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) 
    {
        ?> 

<div id="comment-<?php echo $row["id_kom"];?>" class="comment-row">
     <div class="comment-user text-success">Od: <?php echo $row["username"];?></div></a><div style="font-size:20px; color: grey"><?php echo $row["date"];?></div>
    <div class="comment-msg" style="font-size: 20px; color: white" id="msgdiv"><?php echo $row["message"];?></div>
 <?php 
 if(isset($_SESSION["rola"]) && $_SESSION["rola"]=='A')
 {
 ?>   
        <div class="delete" name="delete" id="delete-<?php echo $row["id_kom"];?>"
          onclick="deletecomment(<?php echo $row["id_kom"];?>)">Usuń komentarz</div>
      </div>
      <?php 
  }
      ?>

<?php
    }
}
?>
