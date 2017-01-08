<div class="col s12 m6 l3 ">
  <div class="card z-depth-1 grey lighten-2">
    <div class="card-image">
      <img src=<?php  echo '"'.$row['Bar_image'].'"'; ?>>
      <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
    </div>
    <div class="card-content">
      <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
    </div>
    <div class="card-action right-align">
      <a id="graylink" href=<?php echo'"bars.php?ID='.$row['ID'].'"' ?>>Skaityti daugiau...</a>
    </div>
  </div>
</div>
