
<?php
 include 'header.php';
 include 'conn.php';

 $sql ="SELECT Bar_name , Bar_description , Bar_image FROM Bars ORDER BY RAND() LIMIT 4" ;

$result = $conn -> query($sql);

?>

<!--   INDEX PRADZIA   -->
<!--   INDEX PRADZIA   -->
<!--   INDEX PRADZIA   -->
<script> 
 $("input.autocomplete").autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'http://placehold.it/250x250'
    }
  });
</script>

<!--   MAIN IMAGE PRADZIA   -->    
<div id="mainimangecenter">
  <img class="mainimg" src="images/main_picture.png"> 
      <div id="searchas">
          <form>
              <div class="input-field">
                <input type="text" id="autocomplete-input" class="autocomplete">
                <label for="autocomplete-input">Search</label>
              </div>
            </form>
      </div>
    </div>
</div>
<!--   SEARCH'as - PABAIGA   -->


        <!--   TOP 4 barai - keturi langai - PRADZIA  -->
        <div class="row">
          <!--   pirmas langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href="#">Skaityti daugiau...</a>
          </div>
        </div>
      </div>
    <!--   pirmo lango pabaiga   -->
    <!--   antras langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href="#">Skaityti daugiau...</a>
          </div>
        </div>
      </div>
    <!--   antro lango pabaiga   -->
    <!--   trecias langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href="#">Skaityti daugiau...</a>
          </div>
        </div>
      </div>
    <!--   trecio lango pabaiga   -->
    <!--   ketvirtas langas   -->
      <div class="col s12 m6 l3 ">
        <div class="card z-depth-1 grey lighten-2">
          <div class="card-image">
            <img src=<?php $row = mysqli_fetch_assoc($result); echo '"'.$row['Bar_image'].'"'; ?>>
            <span class="card-title"><?php echo $row['Bar_name'];  ?></span>
          </div>
          <div class="card-content">
            <p class="truncate"><?php echo $row['Bar_description'];  ?></p>
          </div>
          <div class="card-action right-align">
            <a id="graylink" href="#">Skaityti daugiau...</a>
          </div>
        </div>
      </div>

      </div>
      <!--   TOP 4 barai - keturi langai - PABAIGA   -->

<!--   INDEX PABAIGA   -->
<!--   INDEX PABAIGA   -->
<!--   INDEX PABAIGA   -->


<?php include 'footer.php'; ?>

