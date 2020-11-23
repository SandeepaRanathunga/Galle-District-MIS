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
    //contractor_page
    $router->addRoute('contractors','Contractor','contractor');
    //contractor register
    $router->addRoute('contractor_register','ContractorRegister','index');
    //aboutus
    $router->addRoute('about_us','AdminAboutUs','aboutUs');


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
    //district generate report
    $router->addRoute('dis_generate_report','DisGenerateReport','disGenerateReport');
    //district notifications
    $router->addRoute('dis_notifications','DisNotifications','disNotifications');
    //district monthly report
    $router->addRoute('dis_view_monthly_report','DisViewMonthlyReport','disViewMonthlyReport');
    //district project proposal
    $router->addRoute('dis_view_project_proposal','DisViewProjectProposals','disViewProjectProposals');

    /*---------------------admin----------------------*/
    $router->addRoute('admin_home','AdminHome','adminHome');
    //admin create account
    $router->addRoute('create_accounts','AdminCreateAccount','adminCreateAccount');
    //admin update account
    $router->addRoute('update_accounts','AdminUpdateAccount','adminUpdateAccount');
    //admin update about us
    $router->addRoute('update_about_us','UpdateAboutUsInfo','updateAboutUsInfo');
    

    /*--------------------contractor-----------------*/
    $router->addRoute('contractor_home','ContractorHome','contractorHome');
    //contractor notifications
    $router->addRoute('con_notifications','ContractorNotifications','contractorNotifications');
    $router->addRoute('contractor_signup','ContractorSignUp','contractorSignUp');
    $router->addRoute('submit_bid_report','ContractorSubmitBidReport','contractorSubmitBidReport');


    /*--------------------Logout-----------------*/
    $router->addRoute('logout','Logout','index');
    $app=new App($router);

?>