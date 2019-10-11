<!-- Start building the Slide -->
<?php
    include_once "includes/mysqli_connect.php";
?>
<div class="slideshow-container">
    <?php
        $sql = "SELECT slide_image FROM slides ORDER BY post_on limit 3";
        $result = mysqli_query($dbc, $sql);
        while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            echo '
            <div class="mySlides" style="display: block;">
			  <img src="admin/uploads/slides/'.$rows['slide_image'].'" style="width:1170px;height: 400px;">
			</div>
			';
        }
    ?>

</div><br>
<!--.dot-->
<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>
<script type="text/javascript" src="style/Slide.js"></script>
<!-- End Slide -->