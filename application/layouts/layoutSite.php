<?php
/**
 * Created by PhpStorm.
 * User: Jose
 * Date: 22/07/2016
 * Time: 10:49
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!--    <link rel="icon" href="favicon.png" type="image/png">-->
    <link rel="shortcut icon" href="<? echo base_url(ICONE . 'andorinhas_logo.ico') ?>" type="img/x-icon">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link
        href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600'
        rel='stylesheet' type='text/css'>


    <!--    carregando bootstrap-->
    <link rel="stylesheet" type="text/css"
          href="<? echo base_url() . INCLUDEPATH ?>/bootstrap/css/bootstrap.min.css"/>
    <!--    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

    <!--    carregando font-awesome-->
    <link rel="stylesheet" type="text/css"
          href="<? echo base_url() . INCLUDEPATH ?>/font-awesome/css/font-awesome.min.css"/>

    <!--    carreganod responsive.css-->
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>responsive.css"/>


    <!--    carregando animate.css-->
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>animate.css"/>

    <!--    carregando pgwslideshow.css -->
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>pgwslideshow.css"/>
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>pgwslideshow_light.css"/>

    <!--    carregando site.css-->
    <link rel="stylesheet" type="text/css" href="<? echo base_url() . CSS ?>style.css"/>
    <!--    carregando bootstrap.min.js-->
    <!--    <script src="htgit tp://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

    <!--    carregando jquery-->
    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>jquery/jquery.min.js"></script>
    <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

    <!--    <script type="text/javascript" src="-->


    <script type="text/javascript" src="<? echo base_url() . INCLUDEPATH ?>bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>jquery.easing.1.3.js"></script>

    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>jquery.isotope.js"></script>
    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>wow.js"></script>
    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>classie.js"></script>

    <!--    carousel-->
    <script type="text/javascript" src="<? echo base_url() . JSPATH ?>pgwslideshow.js"></script>

    <!--    <script type="text/javascript" src="-->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic"
          rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script type="text/javascript" src="<? echo base_url(JSPATH . 'html5element.js') ?>"></script>
    <script type="text/javascript" src="<? echo base_url(JSPATH . 'html5shiv.js') ?>"></script>
    <script type="text/javascript" src="<? echo base_url(JSPATH . 'respond-1.1.0.min.js') ?>"></script>
    <![endif]-->

    <title>{title_for_layout}</title>

    {css_for_layout}
    {js_for_layout}


</head>
<body>
{content_for_layout}
</body>
</html>