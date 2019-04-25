<!doctype html>

<html lang="en">

<?php include "./Body/head.php";?>

<body>
  <?php include "./Body/navbar.php";?>
  <div class="container" style="margin-top: 70px">
<?php
$path = "/var/www/html/www.raspberrypi.org/magpi-issues/";

// get everything except hidden files
$files = preg_grep('/^([^.])/', scandir($path));

foreach ($files as $file) {
    $thelist .= "<li><a href=\"./www.raspberrypi.org/magpi-issues/$file\" target=\"_blank\">&nbsp;$file</a></li>";
}
?>
      <h2>List of MagPi Magazine's:</h2>
      <ol>
        <?php echo $thelist; ?>
      </ol>
      <?php include "./Body/footer.php"?>
  </div>
</body>

</html>
