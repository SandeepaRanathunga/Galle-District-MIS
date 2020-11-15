<?php
    require_once __DIR__.'/core/App.php';
    require_once __DIR__.'/core/Controller.php';
    require_once __DIR__.'/core/Router.php';

    $router=new Router();
    /*---------------------home-----------------------*/
    $router->addRoute('','Home','index');
    //Login
    $router->addRoute('login','Login','userLogin');
    //forgotPassword
    //home ongoing projects
    $router->addRoute('ongoing_projects','OngoingProjects','ongoingProjects');
    //home finished projects
    $router->addRoute('finished_projects','FinishedProjects','finishedProjects');
    //home annual reports
    $router->addRoute('annual_reports','AnnualReports','annualReports');
    //email_verify
    $router->addRoute('email_verify','EmailVerify','verifyEmail');
    
    /*--------------------division---------------------*/
    $router->addRoute('div_home','DivHome','divHome');
    //division add montly report
    $router->addRoute('add_monthly_report','DivAddMonthlyReport','addMonthlyReport');
    //division launch project
    $router->addRoute('launch_project','DivLaunchProject','launchProject');
    //division call for bids
    $router->addRoute('call_for_bids','DivCallForBids','divCallForBids');
    //division notifications
    $router->addRoute('div_notifications','DivNotifications','divNotifications');
    //division respond contractors
    $router->addRoute('respond_contractors','DivRespondContractors','divRespondContractors');
    //division view bid reports
    $router->addRoute('view_bid_reports','DivViewBidReports','divViewBidReports');
    
    /*--------------------district---------------------*/
    $router->addRoute('dis_home','DisHome','disHome');
    //district manage funds record
    $router->addRoute('dis_manage_funds','DisManageFunds','disManageFunds');

    /*---------------------admin----------------------*/
    $router->addRoute('admin_home','AdminHome','adminHome');
    //admin create account
    $router->addRoute('admin_create_account','AdminCreateAccount','adminCreateAccount');

    /*--------------------contractor-----------------*/
    $router->addRoute('contractor_home','ContractorHome','contractorHome');

    $app=new App($router);

?>