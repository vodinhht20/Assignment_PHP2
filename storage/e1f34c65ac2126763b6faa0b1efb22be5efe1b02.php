<?php $__env->startSection('scriptUpfle'); ?>
    <script>
        var inpUpFile = document.querySelector('#upFile')
            inpUpFile.addEventListener("change",function(event) {
                var outputImg = document.querySelector('#outputImg');
                var reader = new FileReader();
                reader.onload = function(){
                    outputImg.src = reader.result;
                };
            reader.readAsDataURL(event.target.files[0]);
        });
    </script>
<?php $__env->stopSection(); ?>

<?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/layout/admin/showUpfile.blade.php ENDPATH**/ ?>