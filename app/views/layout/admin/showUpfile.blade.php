@section('scriptUpfle')
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
@endsection

