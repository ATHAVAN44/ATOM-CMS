<?php
function nav_main($dbc,$pageid){
    
      $q = "SELECT * FROM pages";
       $r = mysqli_query($dbc,$q);
    
      while($nav = mysqli_fetch_assoc($r)) { ?>
                
   <li <?php if($pageid==$nav['id']){echo 'class="active"';}?>><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['title'];?> <span class="sr-only">(current)</span></a></li>

 <?php  }
    
}
       
?>