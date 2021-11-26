<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/helpers.php';

$user_id = $_SESSION['user_id'];
// Tekirish kk: user avtorizatsiyadan otganmi?
if ( !empty($user_id)) {
    // xa bolsa, /admin/ ga redirect qilish kk 
    header('Location: /admin/');
}
    

// yoq -> login.php ni ko'rsatish kk 

// Avtorizatsiya logikasini:
            //POST email,passwordni tekshiramiz
if (  !empty($_POST['login']) ) {

    $email = $_POST['email'];
    $password = md5(SITE_KEY. $_POST['password']);

    if ($email && $password) {
        $query = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
        $result = mysqli_query($db_connection, $query);
        $user = mysqli_fetch_assoc($result);
    } 

    
    // session ga $user ni kiritamiz
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header('Location: /admin/');
    }
    
    $error = "Foydalanuvchi ma'lumotlari - email yoki parol noto'gri!";
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Saytga kirish - <?php echo SITE_NAME ?></title>

    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(to right, rgb(101, 101, 139), rgb(48, 48, 141));
        }

        form {
            background: rgba(255,255,255, 0.8);
            max-width: 30%;
        }
    </style>
  </head>
  <body class="d-flex justify-content-center align-items-center"> 

  
    <form class="bg-white p-5 rounded shadow-lg" method="POST" action=""> 
        <h5 class="text-center mb-4">Boshqaruv paneliga kirish uchun ma'lumotlaringizni kiriting</h3>
        <?php if (!empty($_POST['login']) && $error) { ?>
            <div class="alert alert-danger d-flex align-items-center py-2" role="alert">
                <div>
                    <?php echo $error ?>
                </div>
            </div>
        <?php } ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <input type="submit" class="btn btn-info d-block w-100 text-white text-center" value="Submit" name="login">
    </form>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>