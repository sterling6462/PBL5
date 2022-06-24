<?php
  
  $conn = mysqli_connect('localhost','root','','pbl5_1');
  $request=$_POST['request'];
  $query="SELECT * from truyen where Id_Loai='$request'";
  $output=mysqli_query($conn,$query);
?>
<div id="container">
    <?php
echo '<section class="truyens">';
      while($fetch = mysqli_fetch_assoc($output))
    {
    echo '<section class="truyen">';
        echo '<section class="img"><img src="'.$fetch['Hinhdaidien'].'"></section>';
        echo '<section class="name"><a href="index.php?controller=truyen&action=detail&idtruyen='.$fetch['Id_Truyen'].'">'.$fetch['Tentruyen'].'</a></section>';
    echo '</section>';
    };
echo '</section>';
?>
</div>