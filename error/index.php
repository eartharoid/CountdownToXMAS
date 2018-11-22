<?php
  $err = $_GET['code'];
  $text = $_GET['text'];

if (empty($err)){
  $err = "UNKOWN ERROR";
}
if (empty($text)){
  $text = "Something went wrong!";
}

if ($err == "404"){
  $url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $path = parse_url($url, PHP_URL_PATH);
  $text = 'Sorry, we couldn\'t find <span style="color:#1ABC9C;">'.$path.'</span>.';
}
?>
<html class="gr__thepetedesign_com">

<head>
  <meta charset="utf-8">
  <title>Countdown To Christmas</title>
  <meta name="title" content="Countdown To Christmas">
  <meta name="description" content="A festive and decorative countdown to Christmas.">
  <meta name="keywords" content="christmas,xmas,countdown,festive">
  <meta name="author" content="Eartharoid">
  <meta name="image" content="/assets/img/logo.png" />
  <meta name="url" content="https://www.countdowntoxmas.tk" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="twitter:card" content="Countdown To Christmas">
  <meta name="twitter:title" content="Countdown To Christmas">
  <meta name="twitter:description" content="A festive and decorative countdown to Christmas.">
  <meta name="twitter:creator" content="@Eartharoid">
  <meta name="twitter:image" content="/assets/img/logo.png" />
  <meta name="og:locale" content="en_UK">
  <meta name="og:title" content="Countdown To Christmas" />
  <meta name="og:image" content="/assets/img/logo.png" />
  <meta name="og:url" content="https://www.countdowntoxmas.tk" />
  <meta name="og:description" content="A festive and decorative countdown to Christmas." />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" id="favicon" href="/assets/img/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
  <script async="" src="//www.google-analytics.com/analytics.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.js"></script>


  <style>
    @font-face {
      font-family: xmasFont;
      src: url(/assets/fonts/MerryChristmasFlake.ttf);
      font-weight: bold;
    }


    #-body {
      background: #090b44;
      /* Old browsers */
      background: -moz-radial-gradient(center, ellipse cover, #090b44 0%, #00001c 100%);
      /* FF3.6+ */
      background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #090b44), color-stop(100%, #00001c));
      /* Chrome,Safari4+ */
      background: -webkit-radial-gradient(center, ellipse cover, #090b44 0%, #00001c 100%);
      /* Chrome10+,Safari5.1+ */
      background: -o-radial-gradient(center, ellipse cover, #090b44 0%, #00001c 100%);
      /* Opera 12+ */
      background: -ms-radial-gradient(center, ellipse cover, #090b44 0%, #00001c 100%);
      /* IE10+ */
      background: radial-gradient(ellipse at center, #090b44 0%, #00001c 100%);
      /* W3C */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#090b44', endColorstr='#00001c', GradientType=1);
      /* IE6-9 fallback on horizontal gradient */
      text-align: center;
      font-family: 'open sans';
      /*position: relative;*
      margin: 0;*/
      padding-bottom: 50px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
    }

    body {
      background-color: #090b44;
      /* Old browsers */
      background-color: -moz-radial-gradient(center, ellipse cover, #090b44 0%, #00001c 100%);
      /* FF3.6+ */
      background-color: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #090b44), color-stop(100%, #00001c));
      /* Chrome,Safari4+ */
      background-color: -webkit-radial-gradient(center, ellipse cover, #090b44 0%, #00001c 100%);
      /* Chrome10+,Safari5.1+ */
      background-color: -o-radial-gradient(center, ellipse cover, #090b44 0%, #00001c 100%);
      /* Opera 12+ */
      background-color: -ms-radial-gradient(center, ellipse cover, #090b44 0%, #00001c 100%);
      /* IE10+ */
      background-color: radial-gradient(ellipse at center, #090b44 0%, #00001c 100%);
      /* W3C */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#090b44', endColorstr='#00001c', GradientType=1);
      /* IE6-9 fallback on horizontal gradient */
      text-align: center;
      font-family: 'open sans';
      position: relative;
      margin: 0;
      height: 100%;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      text-shadow: 2px 2px 4px #000000;
    }



    .main h1 {
      padding: 20px 50px;
      float: left;
      width: 100%;
      font-size: 60px;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      font-weight: 100;
      margin: 0;
      padding-top: 25px;
      font-family: 'Pacifico';
      letter-spacing: 2px;
    }

    .main h1.demo1 {
      background: #1ABC9C;
    }



    a {
      color: #009999;
      text-decoration: none;
    }

    h1 {
      margin-top: 5px;
      color: #1D3185;
      text-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
      margin-bottom: 5px;
      font-size: 70px;
      letter-spacing: -4px;
    }

    h2 {
      color: #3C487A;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .pointer {
      position: fixed;
      bottom: 10px;
      left: 50%;
      margin-left: -245px;
      color: #2744BE;
      font-family: 'Open Sans', cursive;
      font-weight: 400;
      font-style: italic;
      font-size: 14px;
      margin-top: 15px;
    }

    .contbox {
      padding-top: 120px;
      padding-bottom: 20px;
      color: white;
      text-shadow: 0 1px 5px rgba(0, 0, 0, 0.5);
    }
  </style>
</head>

<body>

  <div class="contbox">
  <!--CONTENT-->
  <center>
    <br>
    <h2>ERROR</h2>
    <h1 style="color:red;"><?php echo $err; ?></h1>
    <h2 style="color:white;"><?php echo $text; ?></h2>
    <br>
    <a href="/?utm_source=404">Home</a>
    </center>
</div>

</body>

</html>
