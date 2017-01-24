<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="description" content="verystar">
    <meta name="author" content="">
    <title>VeryStar</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo resource_url('static/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Add custom CSS here -->
    <?php echo view()->content('css'); ?>
    <?php echo view()->content('js'); ?>
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <?php echo view()->content('content'); ?>
</div>
<?php echo view()->content('endjs'); ?>
</body>
</html>