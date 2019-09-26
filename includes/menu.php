<?php
    include "includes/mysqli_connect.php";
    include "includes/functions.php";
?>
<!-- Start building the Menu -->
<div id="menu">
    <div id="menu-detal">
        <ul>
            <?php
            $q = "SELECT * FROM categories  ";
            $r = mysqli_query($dbc,$q);
            confirm_query($r,$q);

            while ($rows = mysqli_fetch_array($r,MYSQLI_ASSOC)){
                echo "<a href=\"\"><li>".$rows['cat_id']."</li></a>";
            }
            ?>
            <a href="Index.html"><li>Home</li></a>
        </ul>
    </div>
</div><!-- End Menu -->
