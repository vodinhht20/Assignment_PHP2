
<script src="<?php echo e(PUBLIC_PATH); ?>bootstrap/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo e(PUBLIC_PATH); ?>bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo e(PUBLIC_PATH); ?>owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo e(PUBLIC_PATH); ?>js/main.js"></script>
<script>
    var $ = document.querySelector.bind(document);
    $("#upFile").addEventListener("change",function(event) {
        var reader = new FileReader();
        reader.onload = function(){
            $("#outputImg").src = reader.result;
        };
    reader.readAsDataURL(event.target.files[0]);
});

</script><?php /**PATH C:\xampp\htdocs\PHP2\mvc2\app\views/layout/script.blade.php ENDPATH**/ ?>