<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Color Viewfinder - The real time, free, easy to use and share palette generator</title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <style>
      html {
        background: url(fondo.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        font-family: 'Open Sans', sans-serif;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
      }

      h2{
        display: block;
        color: white;
        margin: 11px 0 0;
        font-weight: 500;

        width: 100%;
        height: auto;
        text-align: center;
        position: relative;
      }

      #icon{
        float:left;
        width:60px;
      }

      #header{
        position:absolute;
        left:10px;
        top:10px;
        width:265px;
      }

      #container{
        width:800px;
        margin: auto;
        text-align:center;
      }

      #content{
        margin:auto;
      }

      #iphone{
        float:right;
        padding:70px 0 0 0;
      }

      #iphone img{
        width:350px;
      }

      #desc{
        margin:240px 0 0 0;
        padding:20px;
        float:right;
        width:200px;
        color:white;

        /* background-color:rgba(255,255,255,0.5); */
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px; /* future proofing */
        -khtml-border-radius: 10px; /* for old Konqueror browsers */
      }
    </style>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-32106971-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  </head>
  <body>
    <div id="header">
      <img src="Icon.png" id="icon">
      <h2><strong>Color</strong>Viewfinder</h2>
    </div>

    <div id="container">
      <div id="content">
        <div id="desc">
          <p>
            <strong>Point you camera to any object and get a color palette in real time! </strong>
          </p>
          <p>
            Explore, Save, <strong>Share</strong> and enjoy color palettes
          </p>
          <a href="http://itunes.apple.com/us/app/color-viewfinder-real-time/id519551982?mt=8"><img src="appstore2.png" width="200px"></a>
        </div>
        <div id="iphone">
          <img src="iphone-real.png">
        </div>
      </div>
    </div>
  </body>
</html>
