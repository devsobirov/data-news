<?php 
session_start();

    require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
    require_once SITE_ROOT . '/config/database.php';
    require_once SITE_ROOT . '/config/helpers.php';

    //Logout - adminkadan chiqsh
    if ( !empty($_POST['logout'])) {
        unset($_SESSION['user_id']);
    }

    $user_id = $_SESSION['user_id'];

    if ( empty($user_id)) {
        header('Location: /login.php');
    }

    $user_obj = mysqli_query($db_connection, "SELECT * FROM `users` WHERE id='$user_id'");
    $user = mysqli_fetch_assoc($user_obj); // $user['name],$user['email']

    //1. sahifani aniqlash
    $page = $_GET['page'];

?>
<!doctype html>
<html lang="en">
  <?php include_once SITE_ROOT. '/tepmlates/admin/head.php' ?>
  <body class="bg-light"> 
    <!-- Top Navigation bar -->
    <?php include_once SITE_ROOT. '/tepmlates/admin/navigation.php' ?>
    <!-- Main -->
    <main class="mt-5">
        <div class="container">
            <?php
                if ($page) {
                    require_once SITE_ROOT . '/admin/'.$page .'/index.php';
                } else {
            ?>
                <section class="w-100 bg-white text-center py-5 shadow rounded">
                    <?php echo "Hush kelibsiz - ".  $user['name'] ?>
                </section>
            <?php } ?>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>