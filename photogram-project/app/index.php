<?php
include 'libs/load.php';
?>
<!doctype html>
<html lang="en">
  <?php
  load_template('_head'); //loaded _head template from libs
  ?>
<body>
<?php
load_template('_header'); //loaded _header template from libs
?>
  <main>
    <?php
load_template('_calltoaction'); //loaded _calltoaction template from libs
?>
    <?php
load_template('_photogram'); //loaded _photogram template from libs
?>
  </main>

  <?php
load_template('_footer'); //loaded _footer template from libs
?>
  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>