    <?php
        $consultarMet = 'SELECT * FROM metatags';
        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaMet = mysqli_fetch_array($resultadoMet);
            $xTitulo    = $filaMet['titulo'];
            $xSlogan    = $filaMet['slogan'];
            $xDes       = $filaMet['description'];
            $xKey       = $filaMet['keywords'];
            $xUrl       = $filaMet['url'];
            $xIco       = $filaMet['ico'];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $xTitulo; ?> <?php if($xSlogan!=""){ echo "| ".$xSlogan; } ?></title>
    <meta name="description" content="<?php echo $xDes; ?>" />
    <meta name="keywords" content="<?php echo $xKey; ?>" />
    <link rel="canonical" href="<?php echo $xUrl; ?>" />

    <!--favicon-->
    <link rel="shortcut icon" href="/cms/assets/img/meta/<?php echo $xIco; ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/cms/assets/img/meta/<?php echo $xIco; ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="/cms/assets/img/meta/<?php echo $xIco; ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="/cms/assets/img/meta/<?php echo $xIco; ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="/cms/assets/img/meta/<?php echo $xIco; ?>">

    <!-- Stylesheets -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/revolution-slider.css" rel="stylesheet">
    <link href="/css/owl.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/in_style.css" type="text/css" >
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="/css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <link href="/css/custom.css" rel="stylesheet">
    <?php
        mysqli_free_result($resultadoMet);
    ?>