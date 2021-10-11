
<script src="<?php echo e(PUBLIC_PATH); ?>bootstrap/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo e(PUBLIC_PATH); ?>bootstrap/js/bootstrap.min.js"></script>

<script src="<?php echo e(PUBLIC_PATH); ?>owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo e(PUBLIC_PATH); ?>js/main.js"></script>


<script>
    var qSelectAll = document.querySelectorAll.bind(document);
    var qSelect = document.querySelector.bind(document);
    
    qSelectAll('.select-mass div').forEach(element => {
            element.addEventListener('click', function(e) {
                qSelectAll('.select-mass div').forEach(element => {
                    element.classList.remove('active');
                });
                element.classList.add('active');
            })
    });

    qSelectAll('.quantity .input button').forEach((element,index) => {
        element.addEventListener('click', function(e) {
            var inpValue = qSelect('.quantity .input input').value;
            var error = qSelect('.quantity .error');
            if (index==0) {
                if (inpValue < 99) {
                    error.innerHTML = "";
                    qSelect('.quantity .input input').value = ++inpValue;
                } else {
                    error.innerHTML = "* Đã đạt số lượng tối đa.";
                }
            } else {
                if (inpValue > 1) {
                    error.innerHTML = "";
                    qSelect('.quantity .input input').value = --inpValue;
                } else {
                    error.innerHTML = "* Tối thiểu phải lớn hơn 0.";
                }
            }
        });
    });
</script><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/layout/script.blade.php ENDPATH**/ ?>