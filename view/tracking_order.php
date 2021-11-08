<?php include_once "./header.php" ?>

<section>
    <div>
        <h1 class="tracking-h1">Theo dõi đơn hàng của tôi</h1>
    </div>
    <div class="tracking_detail">
      

        <form action=" method="post"
             class="tracking-orderFORM_1">
            <p  class="tracking-orderP_2">
            Để Theo Dõi Đơn Hàng, Vui Lòng Nhập Hạng Đơn Hàng Của Bạn Vào Ô Bên Dưới Và Nhấn Nút "Theo Dõi". Điều Này Đã Được Trao Cho Bạn Trên Biên Nhận Của Bạn Và Trong Email Xác Nhận Mà Bạn Đáng Lẽ Đã Nhận Được.
            </p>
            <p  class="tracking-orderP_3">
                <label for="order class"  class="tracking-orderLABEL_4">
                   ID đơn hàng
                </label>
                <input type="text" name="order class"  class="tracking-orderINPUT_5"
                    placeholder="Tìm thấy trong email xác nhận đặt hàng của bạn." />
            </p>
            <p  class="tracking-orderP_6">
                <label for="order_email"  class="tracking-orderLABEL_7">
                    Email thanh toán
                </label>
                <input type="text" name="order_email"  class="tracking-orderINPUT_8"
                    placeholder="Email đã sử dụng khi thanh toán." />
            </p>
            <div  class="tracking-orderDIV_9">
            </div>
            <p  class="tracking-orderP_10">
                <button type="submit" name="track" value="Track"  class="tracking-orderBUTTON_11">
                    Track
                </button>
            </p>
            <input type="h classden"  class="tracking-orderINPUT_12" name="woocommerce-order-tracking-nonce"
                value="dcb568a256" />
            <input type="h classden" name="_wp_http_referer" value="/greenmart_fresh/tracking-order/"
                 class="tracking-orderINPUT_13" />
        </form>


    </div>
</section>