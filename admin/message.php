<?php
if(isset($_SESSION['message'])){
  
    ?>
    
   <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Succès</strong> <?=$_SESSION['message']; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>


<?php
         unset($_SESSION['message']);
         
         
  }
  ?>


<?php

  if(isset($_SESSION['danger'])){
  
    ?>
    
   
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>danger </strong> <?=$_SESSION['danger']; ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php
         unset($_SESSION['danger']);
         
         
  }
    ?>
  
























