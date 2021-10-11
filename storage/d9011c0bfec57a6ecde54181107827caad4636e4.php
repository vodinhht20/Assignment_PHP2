    <script src="<?php echo e(PUBLIC_PATH); ?>assets\js\vendor.min.js"></script>
    <!-- Third Party js-->
    <script src="<?php echo e(PUBLIC_PATH); ?>assets\libs\peity\jquery.peity.min.js"></script>
    <script src="<?php echo e(PUBLIC_PATH); ?>assets\libs\apexcharts\apexcharts.min.js"></script>
    <script src="<?php echo e(PUBLIC_PATH); ?>assets\libs\jquery-vectormap\jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo e(PUBLIC_PATH); ?>assets\libs\jquery-vectormap\jquery-jvectormap-us-merc-en.js"></script>

    <!-- Dashboard init -->
    <script src="<?php echo e(PUBLIC_PATH); ?>assets\js\pages\dashboard-1.init.js"></script>

    <!-- App js -->
    <script src="<?php echo e(PUBLIC_PATH); ?>assets\js\app.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
    
      <!-- js ckeditor -->
      <script type="text/javascript" src="//js.nicedit.com/nicEdit-latest.js"></script> 
      <script type="text/javascript">
            bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
      </script>

      
<script>
      if ($('.bnt-torger')) {
            const qSelectAll = document.querySelectorAll.bind(document);
            const qSelect = document.querySelector.bind(document);
            if (qSelectAll('.bnt-torger')) {
                  qSelectAll('.bnt-torger').forEach((element,index) => {
                              element.addEventListener('click', e => {
                                    var idTopic = qSelectAll('.statusChecked')[index];
                                    var status = qSelectAll('.statusChecked')[index];
                                    var topicName = qSelectAll('.topic_name')[index];
                                    $.ajax({
                                          type: "post",
                                          url: "chu-de",
                                          data: {
                                                id: idTopic.value,
                                                status: status.checked ? 2 : 1
                                          },
                                          success: function () {
                                                if (qSelectAll('.statusChecked')[index].checked) {
                                                      toast('toast__success','fas fa-check-circle','Bạn đã khôi phục trạng thái','Chủ đề <b>'+topicName.innerText +'</b> đã được bật');
                                                } else {
                                                      toast('toast__error','fas fa-exclamation-circle','Bạn đã tắt trạng thái','Chủ đề <b>'+topicName.innerText +'</b> đã bị tắt');
                                                }
                                          }
                                    });
                              })
                        });
            }
            function toast(status,iconMain,title,content) {
                  const mainToast = document.querySelector('#toasts');
                  if(mainToast) {
                        const toast = document.createElement('div');
                        toast.classList.add('toast', status);
                        toast.innerHTML = ` <div class="toast__icon">
                                          <i class="${iconMain}"></i>
                                          </div>
                                          <div class="toast__body">
                                          <h3 class="toast__body__title">${title}</h3>
                                          <p class="toast__body__msg">${content}</p>
                                          </div>
                                          <div class="toas__close">
                                          <i class="ti-close"></i>
                                          </div>`;
                        mainToast.appendChild(toast)
                        setTimeout(e => {
                              mainToast.removeChild(toast);
                        }, 5000)
                  }
            }
      }
</script>
<script>
      if ($('#inpKey')) {
            $(document).ready(function () {
                  $(document).on('keyup','#inpKey' ,function () {
                        var key = $(this).val();
                        $.ajax({
                        type: "GET",
                        url: "bai-viet/search",
                        data: {
                              key: key
                        },
                        dataType:'text',
                        success: function (response) {
                              // $('#listResultSearch').html(response);
                              console.log(response);

                        }
                        });
                  });
            });
            
        
      }
  </script><?php /**PATH C:\xampp\htdocs\PHP2\Assignment\mvc2\app\views/layout/admin/script.blade.php ENDPATH**/ ?>