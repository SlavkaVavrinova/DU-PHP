<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/config.php' ; 
require __DIR__ . '/functions.php' ; 
?>

<!DOCTYPE html>
<html>

<?php require __DIR__ . '/layout/head.php'; ?>

<body>
  <div id="wrapper">

    <?php require __DIR__ . '/layout/sideBar.php'; ?>

    <div id="page-wrapper" class="gray-bg">
      <div class="row border-bottom">

        <?php require __DIR__ . '/layout/topBar.php'; ?>

        <!-- Main content -->
        <div class="wrapper wrapper-content animated fadeInRight">
          <div class="row">
            <?php echo insertContact($contacts);?>
          </div>
        </div>
        <!-- /End Main content -->

        <?php require __DIR__ . '/layout/footer.php'; ?>

      </div>
    </div>

    <?php require __DIR__ . '/layout/scripts.php'; ?>

</body>

</html>