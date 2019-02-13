<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <title></title>
</head>
<body>
<form id="uploadForm" enctype="multipart/form-data">
    文件:<input id="file" type="file" name="file" onchange="readURL(this);" />
    <img id="blah" src="#" alt="your image" />
</form>
<!--<button id="upload">上传文件</button>-->
</body>
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };
            reader.readAsDataURL(input.files[0]);
            var result=getMobileOperatingSystem();
            alert(result);
        }
    }
    function getMobileOperatingSystem() {
        var userAgent = navigator.userAgent || navigator.vendor || window.opera;

        // Windows Phone must come first because its UA also contains "Android"
        if (/windows phone/i.test(userAgent)) {
            return "Windows Phone";
        }

        if (/android/i.test(userAgent)) {
            return "Android";
        }
        // iOS detection from: http://stackoverflow.com/a/9039885/177710
        if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            return "iOS";
        }
        return "unknown";
    }

//    $(function () {
//        $("#upload").click(function () {
////            var formData = new FormData($('#uploadForm')[0]);
//            var file_obj = document.getElementById('file').files[0];
//
//            var fd = new FormData();
//            fd.append('file_name', file_obj);
//            $.ajax({
//                type: 'post',
//                url: "<?php //echo site_url('register/ajax_upload/')?>//",
//                data: fd,
//                cache: false,
//                processData: false,
//                contentType: false,
//            }).success(function (data) {
//                alert(data);
//            }).error(function () {
//                alert("上传失败");
//            });
//        });
//    });
</script>
</html>
