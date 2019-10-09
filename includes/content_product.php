<div id="main-contact">
    <h1>SẢN PHẨM MỚI</h1>
    <h1>----------///----------</h1>
    <div id="produces-wp">
        <div id="produce-sidebar-a">
            <h1>Tìm sản phẩm</h1>
            <form action="">
                <input type="search" placeholder=" 	Tìm sản phẩm ..." id="txtsearch">
            </form>
            <h1>Lọc theo giá</h1>
            <div class="range">
                <input type="range" min="500000" max="5000000" value="50" class="slider" id="myRange">
                <p>Value: <span id="demo">500000</span>	VNĐ</p>
            </div>
            <form action="">
                <input type="submit" value="Lọc" class="submit">
            </form>

            <script>
                var slider = document.getElementById("myRange");
                var output = document.getElementById("demo");
                output.innerHTML = slider.value;

                slider.oninput = function() {
                    output.innerHTML = this.value;
                }
            </script>
        </div>
        <div id="produce-sidebar-b">
            <h1>New Shoes</h1>
            <select name="" id="sort">
                <option value="">Thứ tự mặc định</option>
                <option value="">Thứ tự mức độ phổ biến</option>
                <option value="">Thứ tự sản phẩm mới</option>
                <option value="">Thứ tự theo giá: thấp đến cao</option>
                <option value="">Thứ tự theo giá: cao xuống thấp</option>
            </select>
            <div id="produce-sidebar-in-b">
                <ul>
                    <li>
                        <div class="produce-info">
                            <img src="Imgs/Produce/giay-off-white1.jpg" style="width: 260px;height: 260px;border-bottom: 1px #eee9e9 solid;position: relative;" alt="">
                            <p>GIÀY SNEAKER</p>
                            <span><p>400,000 VNĐ</p></span>
                            <br>
                            <a href="Cart.html"><p>Đặt Hàng</p></a>
                            <br>
                        </div>
                    </li>
                    <li>
                        <div class="produce-info">
                            <img src="Imgs/Produce/085f33b490b9ced88e3725a3e23df170.jpg" style="width: 260px;height: 260px;border-bottom: 1px #eee9e9 solid;position: relative;" alt="">
                            <p>GIÀY SNEAKER</p>
                            <span><p>400,000 VNĐ</p></span>
                            <br>
                            <a href="Cart.html"><p>Đặt Hàng</p></a>
                            <br>
                        </div>
                    </li>
                    <li>
                        <div class="produce-info">
                            <img src="Imgs/Produce/448e18f374dc7e963ee9b2916de83e9f.jpg" style="width: 260px;height: 260px;border-bottom: 1px #eee9e9 solid;position: relative;" alt="">
                            <p>GIÀY SNEAKER</p>
                            <span><p>400,000 VNĐ</p></span>
                            <br>
                            <a href="Cart.html"><p>Đặt Hàng</p></a>
                            <br>
                        </div>
                    </li>
                    <li>
                        <div class="produce-info">
                            <img src="Imgs/Produce/620b609783435d1ed71ca10f4c63e637.jpg" style="width: 260px;height: 260px;border-bottom: 1px #eee9e9 solid;position: relative;" alt="">
                            <p>GIÀY SNEAKER</p>
                            <span><p>400,000 VNĐ</p></span>
                            <br>
                            <a href="Cart.html"><p>Đặt Hàng</p></a>
                            <br>
                        </div>
                    </li>
                    <li>
                        <div class="produce-info">
                            <img src="Imgs/Produce/8c69aade3904d4f6b3923a74478f3915.jpg" style="width: 260px;height: 260px;border-bottom: 1px #eee9e9 solid;position: relative;" alt="">
                            <p>GIÀY SNEAKER</p>
                            <span><p>400,000 VNĐ</p></span>
                            <br>
                            <a href="Cart.html"><p>Đặt Hàng</p></a>
                            <br>
                        </div>
                    </li>
                    <li>
                        <div class="produce-info">
                            <img src="Imgs/Produce/cach-buoc-day-giay-humanrace-1-700x510.jpg" style="width: 260px;height: 260px;border-bottom: 1px #eee9e9 solid;position: relative;" alt="">
                            <p>GIÀY SNEAKER</p>
                            <span><p>400,000 VNĐ</p></span>
                            <br>
                            <a href="Cart.html"><p>Đặt Hàng</p></a>
                            <br>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</div>