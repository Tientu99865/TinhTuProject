<?php
    include "includes/mysqli_connect.php";
    include "includes/functions.php";
?>
<!-- Start building the Menu -->
<div id="menu">
    <div id="menu-detal">
        <ul>
            <?php
            $q = "SELECT * FROM categories ORDER BY position ASC";
            $r = mysqli_query($dbc,$q);
            confirm_query($r,$q);

            while ($rows = mysqli_fetch_array($r,MYSQLI_ASSOC)){
                $url = $rows['url'];
                if (!empty($url)){
                    echo "<a href=\"$url\"><li>{$rows['cat_name']}</li></a>";
                }else{
                    echo "<a href='single.php?cid={$rows['cat_id']}'><li>{$rows['cat_name']}</li></a>";
                }

            }
            ?>

        </ul>
    </div>
</div><!-- End Menu -->
