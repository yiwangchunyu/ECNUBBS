
    //调用富文本编辑
    $(document).ready(function() {
        var $summernote = $('#summernote').summernote({
            height: 600,
            minHeight: null,
            maxHeight: null,
            focus: true,
            //调用图片上传
            callbacks: {
                onImageUpload: function (files) {
                    sendFile($summernote, files[0]);
                }
            }
        });

        //ajax上传图片
        function sendFile($summernote, file) {
            var formData = new FormData();
            formData.append("file", file);
            $.ajax({
                url: "{/upload_img.php}",//路径是你控制器中上传图片的方法，下面controller里面我会写到
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success: function (data) {
                    $summernote.summernote('insertImage', data, function ($image) {
                        $image.attr('src', data);
                    });
                }
            });
        }
    });