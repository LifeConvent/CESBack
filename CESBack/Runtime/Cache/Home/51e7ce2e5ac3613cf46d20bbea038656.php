<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<script language="JavaScript">
    function dosubmit(){
        $.ajax({
            type: "POST", //用POST方式传输
            url: "http://ipsenwx.nnitcn.com/IPSEN/index.php/Home/Access/access", //目标地址.
            dataType: "json", //数据格式:JSON
            data: {msg_signature:'eaaa5844e61f17b0495784bd3b87ec9d50ae0e0d',timestamp:1482375150, nonce:1741698828,echostr:'kvgDuC02uXKpfjk9J5WGezjWmSt9afFdfpTKgMFWVDkweF8dm6ET1rFddX//Jz7kta2BHI0JeU3qbRwEw/YUtQ=='},
            success: function (result) {
                alert(result);
            },
            error: function (request) {
                alert('网络连接发生未知错误，请稍后再试！');
            }
        });
    }
</script>
<body>

<button onclick="dosubmit();"></button>
</body>
</html>