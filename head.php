
<?php
function base_url($str_url){
    $baseurl=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    return $baseurl.$str_url;
}


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Think IT Prime</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?=base_url('/assets/css/bootstrap.min.css');?>">

     <!-- Main css -->
     <link rel="stylesheet" href="<?=base_url('/assets/css/main.min.css');?>">
     
    <link rel="stylesheet" href="<?=base_url('/assets/css/stye.css');?>">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?=base_url('/assets/css/fontawesome-all.min.css');?>">
    <!-- Slick -->
    <link rel="stylesheet" href="<?=base_url('/assets/css/slick.css');?>">
    <!-- magnific popup -->
    <link rel="stylesheet" href="<?=base_url('/assets/css/magnific-popup.css');?>">
    <!-- line awesome -->
    <link rel="stylesheet" href="<?=base_url('/assets/css/line-awesome.min.css');?>">
   

    <link rel="icon" type="image/x-icon" href="<?=base_url('/assets/images/favicon/fav-icon.webp');?>" sizes="32x32">

</head>