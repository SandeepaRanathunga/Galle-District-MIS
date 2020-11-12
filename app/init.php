<?php
    require_once __DIR__.'/core/App.php';
    require_once __DIR__.'/core/Controller.php';
    require_once __DIR__.'/core/Router.php';

    $router=new Router();
    //Home
    $router->addRoute('','Home','index');
    //Login
    $router->addRoute('login','Login','userLogin');
    //forgotPassword
    //email_verify
    $router->addRoute('email_verify','EmailVerify','verifyEmail');
    //division add montly report
    $router->addRoute('add_monthly_report','DivAddMonthlyReport','addMonthlyReport');
    //division launch project
    $router->addRoute('launch_project','DivLaunchProject','launchProject');
    $app=new App($router);

?>