<?php
 include 'header.php';
 include 'conn.php';

 header('Content-Type: text/html; charset=utf-8');
 mysqli_set_charset($conn, "utf8");

 $sql ="SELECT ID, Bar_name , Bar_description , Bar_image FROM Bars ORDER BY RAND() LIMIT 4" ;

$result = $conn -> query($sql);

?>

<!--   INDEX PRADZIA   -->
<!--   INDEX PRADZIA   -->
<!--   INDEX PRADZIA   -->

<!--   MAIN IMAGE IR SEARCH PRADZIA   -->
<div id="mainimangecenter">
  <img class="mainimg hoverable" src="images/main_picture.png">
      <div id="searchas">
        <form action = "bars.php" method="GET">
          <div class="input-field" >
           <input type="text" id="autocomplete-input" class="autocomplete" name="name">
            <label for="autocomplete-input">Search</label>
           <ul class="autocomplete-content dropdown-content"></ul>
          </div>
        </form>
      </div>
  </div>
<!--   MAIN IMAGE IR SEARCH PABAIGA   -->

        <!--   TOP 4 barai - keturi langai - PRADZIA  -->

<div class="row">

  <?php while( $row = mysqli_fetch_assoc($result)){include 'Bar_news_card.php';} ?>

</div>

      <!--   TOP 4 barai - keturi langai - PABAIGA   -->

<!--   INDEX PABAIGA   -->

<?php include 'footer.php'; ?>
