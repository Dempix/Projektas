<?php
 include 'header.php';
include 'conn.php';

 header('Content-Type: text/html; charset=utf-8');
 mysqli_set_charset($conn, "utf8");

 $sql ="SELECT ID, Bar_name , Bar_description , Bar_image FROM Bars ORDER BY ID ASC LIMIT 12" ;

$result = $conn -> query($sql);

 ?>


<div class="row">

  <?php while( $row = mysqli_fetch_assoc($result)){include 'Bar_news_card.php';} ?>

</div>

<?php include 'footer.php'; ?>
