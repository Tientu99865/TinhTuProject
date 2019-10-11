<!-- Start building the Produce Infomation -->
<div id="main-wrapper">
    <?php
    include_once 'includes/mysqli_connect.php';
    include_once 'includes/functions.php';
    $sql_cat = "SELECT * FROM categories ORDER BY position ASC";
    $cat_results = mysqli_query($dbc, $sql_cat);
    confirm_query($cat_results, $sql_cat);
    while ($row_cat = mysqli_fetch_array($cat_results, MYSQLI_ASSOC)) {
        if (empty($row_cat['url'])) {
            echo '
            <div class="produces">
            <h1>'.$row_cat['cat_name'].'</h1>
            <h1>----------///----------</h1>
            <ul>';
            $sql_pro = "SELECT * FROM products WHERE cat_id = {$row_cat['cat_id']} ORDER BY post_on asc limit 8";
            $pro_result = mysqli_query($dbc, $sql_pro);
            confirm_query($pro_result, $sql_pro);
            while ($row_pro = mysqli_fetch_array($pro_result, MYSQLI_ASSOC)) {
                if($row_pro['product_price']<=$row_pro['selling_price']){
                    echo '
                        <li>
                            <div class="produce-info">
                                <img src="admin/uploads/products/'.$row_pro['image'].'" style="width: 260px;height: 260px;border-bottom: 1px #eee9e9 solid;position: relative;" alt="">
                                <p>'.$row_pro['product_name'].'</p>
                                <span><p>'.number_format($row_pro['product_price'], 0, ',', '.').' VNĐ</p></span>
                                <br>
                                <a href="Cart.html"><p>Đặt Hàng</p></a>
                                <br>
                            </div>
                        </li>
                    ';
                }
                else{
                    echo '
                        <li>
						<div class="produce-info">
								<img src="admin/uploads/products/'.$row_pro['image'].'" style="width: 260px;height: 260px;border-bottom: 1px #eee9e9 solid;position: relative;" alt="">
								<p>'.$row_pro['product_name'].'</p>
								<span><span>'.number_format($row_pro['product_price'], 0, ',', '.').' VNĐ</span><p>'.number_format($row_pro['selling_price'], 0, ',', '.').' VNĐ</p></span>
								<br>
								<a href="Cart.html"><p>Đặt Hàng</p></a>
							<br>
								<h3>Giảm giá</h3>
						</div>
					</li>
                    ';
                }

            }

            echo '
            </ul>
        </div>';
        }
    }
    ?>
</div>