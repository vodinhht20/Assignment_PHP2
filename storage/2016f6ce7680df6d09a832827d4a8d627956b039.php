
<?php $__env->startSection('content'); ?>
<main class="product-detail-page mt-5">
    <div class="container">
        <h2>Thông tin sản phẩm</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="http://localhost/PHP2/Assignment/mvc2/public/image/sp12.jpg" alt="">
            </div>
            <div class="col-lg-6">
                <h3 class="title-product">Thịt Bò Úc</h3>
                <div class="description">
                    <p><span class="price">17.000 đ</span><span class="price-root">18.000 đ</span> </p>
                    <p>Cây ổi nhỏ hơn cây vải, nhãn, cao nhiều nhất 10m, đường kính thân tối đa 30 cm. Những giống mới còn nhỏ và lùn hơn nữa </p>
                    <div class="input-order">
                        <form action="">
                            <div class="mass">
                                <h4>Trọng lượng: </h4>
                                <div class="select-mass">
                                    <div class="active"> 1Kg </div>
                                    <div> 2Kg </div>
                                    <div> 3Kg </div>
                                    <div> 4Kg </div>
                                </div>
                            </div>
                            <div class="quantity mt-3">
                                <h4 for="">Số Lượng: </h4>
                                <div class="input">
                                    <button class="bnt-plus" type="button"><i class="ti-plus"></i></button>
                                    <input type="text" value="1" min="1" max="99">
                                    <button class="bnt-minus" type="button"><i class="ti-minus"></i></button>
                                </div>
                                <div class="mt-1 text-danger error"></div>
                                <div class="bnt-order mt-3">
                                    <button class="bnt-buy-now">Mua Ngay</button>
                                    <button  class="bnt-add-cart">Thêm Vào Giỏ Hàng</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h4>Thông tin chi tiết</h4>
        <p>Thịt bò nhập khẩu từ ú tới canada rất là ngon và bổ dưỡng</p>
    </div>   
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/product/detail.blade.php ENDPATH**/ ?>