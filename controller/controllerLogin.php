<?php

require_once 'model/model.php';

if (!empty($_POST)) {

    $userlog = $_POST['userlog'];
    $passwordlog = $_POST['passwordlog'];

    $row = loginAccess($userlog);
    $admin = $row[3];

    if ($row[1] != 1) { /* Si la cuenta del usuario a logearse no está activada. */
        echo '<script type="text/javascript">alert("Por favor, active su cuenta préviamente para poder iniciar sesión.");</script>';
        exit();
    } elseif ($row[2] != 0) { /* Si la cuenta del usuario a logearse está baneada. */

        echo '<script type="text/javascript">alert("Su cuenta se encuentra baneada. No puede acceder a ella. Póngase en contacto con nosotros.");</script>';
        exit();

    } else { /* En caso de ser correctos usuario y password inicia sesión. */

        if($admin) {
            session_start();
            $_SESSION['User'] = $userlog;
            $_SESSION['Admin'] = $admin;
            echo '<script>window.location.href="../admin/main";</script>';

        } else {

            if (password_verify($passwordlog, $row[0])) {
                session_start();
                $_SESSION['User'] = $userlog;
                echo '<script type="text/javascript">alert("Ha iniciado sesión correctamente.");</script>';
                echo '<script>window.location.href="../";</script>';

            }

        }
    }
} else {
    require '../view/viewLogin.php';
}

?>