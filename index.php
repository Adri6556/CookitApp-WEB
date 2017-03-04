<?php

    if(!isset($_GET['url'])) {
        require_once 'controller/controllerMain.php' ;
    } else {
        $url= explode("/", $_GET["url"]);

        $resource = $url[0];
        $action = $url[1];

        switch ($resource) {
            case 'products':
                switch ($action) {
                    case 'list': /* OK */
                        $id = $url[2];
                        require_once 'controller/controllerProducts.php';
                        break;
                    case 'spec': /* OK */
                        $id = $url[2];
                        require_once 'controller/controllerProductSpec.php';
                        break;
                    case 'cart':
                        if(!empty($url[2])) {
                            switch ($url[2]) {
                                case 'confirmOrder':
                                    require_once 'controller/controllerConfirmBuy.php';
                                    break;
                            }
                        } else {
                            require_once 'controller/controllerCart.php';
                            break;
                        }
                    case 'search':
                        $id = $url[2];
                        require_once 'controller/controllerSearch.php';
                        break;
                    case 'addCart':
                        $id = $url[2];
                        require_once 'controller/controllerAddCart.php';
                        break;
                    case 'deleteCart':
                        $id = $url[2];
                        require_once 'controller/controllerDeleteCart.php';
                        break;
                    case 'finishOrder':
                        require_once 'controller/controllerFinishBuy.php';
                        break;
                }

                break;

            case 'user':
                switch ($action) {
                    case 'login': /* OK */
                        require_once 'controller/controllerLogin.php';
                        break;
                    case 'logout': /* OK */
                        require_once 'controller/controllerLogout.php';
                        break;
                    case 'register': /* OK */
                        require_once 'controller/controllerFormulary.php';
                        break;
                    case 'myaccount': /* OK - Acabar Menú*/
                        require_once 'controller/controllerMyAccountUser.php';
                        break;
                    case 'verification':
                        $code = $url[2];
                        require_once 'controller/controllerVerification.php';
                        break;
                }

                break;

            case 'admin':
                switch($action) {
                    case 'main':
                        require_once 'controller/controllerMyAccountAdmin.php';
                        break;
                    case 'list':
                        $id = $url[2];
                        require_once 'controller/controllerProductsAdmin.php';
                        break;
                    case 'spec':
                        $id = $url[2];
                        require_once 'controller/controllerProductSpecAdmin.php';
                        break;
                    case 'addProduct':
                        require_once 'controller/controllerAddProductAdmin.php';
                        break;
                    case 'deleteProduct':
                        $id = $url[2];
                        require_once 'controller/controllerDeleteProductAdmin.php';
                        break;
                    case 'modifyProduct':
                        $id = $url[2];
                        require_once 'controller/controllerModifyProductAdmin.php';
                        break;
                    case 'specProduct':
                        $id = $url[2];
                        require_once 'controller/controllerProductSpecAdmin.php';
                        break;
                    case 'logout': /* OK */
                        require_once 'controller/controllerLogout.php';
                        break;
                }

                break;

        }
    }

?>