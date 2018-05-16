<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" name="viewport"
          content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <title></title>
    <style>
        a {
            text-decoration: none;
            color: dimgray;
            font-size: 15px;
        }

        body {
            background-color: lightgrey;
        }

        .title {
            margin-left: -8px;
            position: fixed;
            top: 0;
            width: 100%;
            height: 50px;
            background-color: white;
            line-height: 50px;
            font-size: 20px;
            float: left;
            z-index: 1000;
            max-width: 1200px;

        }

        .main {
            margin-top: 100px;
            margin-left: -46px;
            max-width: 1200px;
        }

        .ti1 {
            position: absolute;
            left: 10px;
            top: 8px;
            float: left;
        }

        .ti2 {
            float: left;
            position: absolute;
            top: 8px;
            right: 20px;
        }

        .ti3 {
            position: absolute;
            left: 45%;
            float: left;
        }

        .name {
            position: absolute;
            top: 65px;
            font-size: 20px;
        }

        .tb {
            position: absolute;
            left: 2%;
            top: 130px;
            padding: 10px;
            background-color: white;
            border-radius: 15px 15px 15px 15px;
            margin: 0 auto;
            margin-left: 5%;
            width: 80%;
            height: 150px;
        }

        .tb table {
            margin: 0 auto;
        }

        .tb table .txt {
            margin-top: 10px;
            width: 200px;
            height: 25px;
            border-radius: 10px 10px 10px 10px;
            border: 1px solid darkgray;
        }

        .tj {
            margin-top: 10px;
            height: 30px;
            width: 40%;
            background-color: dimgray;
            border: 1px solid dimgray;
            color: white;
            border-radius: 5px 5px 5px 5px;
        }

        tr {
            height: 50px;
        }
    </style>
    <script>
        var countdown = 60;
        window.onload = function settime() {
            document.getElementById('times').innerHTML = countdown;

            if (countdown > 0) {
                setTimeout(function () {
                    countdown--;
                    settime()
                }, 1000)
            }
            else {
                document.getElementById('times').innerHTML = "<input type='button' value='重新获取验证码' onclick=\"fun3()\" />";
                countdown = 60;
            }
        }
        function fun1() {
            document.getElementById('times').innerHTML = countdown;
            if (countdown > 0) {
                setTimeout(function () {
                    countdown--;
                    fun1()
                }, 1000)
            }
            else {
                document.getElementById('times').innerHTML = "<input type='button' value='重新获取验证码' onclick=\"fun3()\"/>";
            }
        }
        function showpage(){
            var ids=document.getElementById("id").value;
            //创建ajax对象
            var xhr=new XMLHttpRequest();
            //接收请求
            xhr.onreadystatechange=function(){
                if(xhr.readyState==4){
                    alert(xhr.responseText);
//                    document.getElementById('price').innerHTML= xhr.responseText;
                }}
            //创建HTTP请求
            xhr.open('get','/web/haval/index.php/Home/Index/sumsdown');
            //发送请求
            xhr.send(null); }
        function fun3(){
            fun1();
            showpage();
        }
    </script>
</head>
<body>
<div class="title">
    <div class="ti3">
        <font>预约</font>
    </div>
    <div class="ti1">
        <a href="/web/haval/index.php/Home/Index/code.html"><img src="/web/haval/Public/Home/img/home.png"/></a>
    </div>
</div>

<div class="main">
    <div class="tb">
        <form id="yy2" method="post" action="/web/haval/index.php/Home/Index/yzcode1">
            <table>
                <input type="hidden" name="id" value="<?php echo ($rands); ?>"/>
                <input type="hidden" name="rand" value="<?php echo ($rand); ?>"/>
                <tr>
                    <td>手机验证码</td>
                    <td><input type="text" id="sj" name="yzm" class="txt"></td>
                </tr>
                <tr>
                    <td>支付方式</td>
                    <td><input type="radio" value="1" name="zffs">在线支付
                        <input type="radio" value="0" name="zffs">到店支付
                    </td>
                </tr>
                <tr>
                    <td colspan="2">验证码已发出：<span id="times"></span></td>

                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="预约" class="tj">
                        <input type="reset" value="重置" class="tj">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>