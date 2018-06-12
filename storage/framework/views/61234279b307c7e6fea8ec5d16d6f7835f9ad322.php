<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>GreenCampus</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="<?php echo e(asset('layui/css/layui.css')); ?>" media="all">
  <script>
  /^http(s*):\/\//.test(location.href) || alert('请先部署到 localhost 下再访问');
  </script>
</head>
<body>
  <div id="LAY_app"></div>
  <script src="<?php echo e(asset('layui/layui.js')); ?>"></script>
  <script src="<?php echo e(asset('layui/font/iconfont.js')); ?>"></script>
  <script>
  layui.config({
    base: '../src/' //指定 layuiAdmin 项目路径
    ,version: '1.0.0-beta5'
  }).use('index');
  </script>
</body>
</html>