<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">

  <title>The RasPiZeroW WebPage</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="./css/bootstrap.css">

  <style TYPE="text/css">
    body {
      background-image: url(./img/rover_selfie_2.png);
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
    li, li a{
      color: white;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="./index.html">Raspberry Pi Zero W
      <img src="./img/raspberry-pi-logo.png" width="25px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="./index.html">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="./library.php">MagPi Magazine
            <span class="sr-only">(current)</span>
          </a>
        </li>
	 <li class="nav-item">
          <a class="nav-link" href="./library2.php">HelloWorld Magazine</a>
        </li>
        <li>
          <a class="nav-link" href="./WebCodeBlog" target="_blank">WebCodeBlog</a>
        </li>
        <li>
          <a class="nav-link" href="./phpmyadmin" target="_blank">PHPMyAdmin</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container" style="margin-top: 65px">
    <?php
    $path = "/var/www/html/www.raspberrypi.org/magpi-issues/";
    
    // get everything except hidden files
$files = preg_grep('/^([^.])/', scandir($path)); 

foreach ($files as $file) {
        $thelist .= "<li><a href=\"./www.raspberrypi.org/magpi-issues/$file\" target=\"_blank\">&nbsp;$file</a></li>";
}
    //if ($handle = opendir($path)) {
      //while (false !== ($file = readdir($handle))) {
        //if ($file != "." && $file != "..") {
          //$thelist .= '<li><a href="'.'./www.raspberrypi.org/magpi-issues/'.$file.'" target="_blank">'.$file.'</a></li>';
        //}
      //}      
      //closedir($handle);
    //}
    //krsort($thelist);
  ?>
      <h2>List of MagPi Magazine's:</h2>
      <ol>
        <?php echo $thelist; ?>
      </ol>
  </div>
  <script src="./js/jquery-3.3.1.js"></script>
  <script src="./js/bootstrap.js"></script>
</body>

</html>
