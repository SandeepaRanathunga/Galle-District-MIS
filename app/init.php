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
    //home ongoing projects view division vice
    $router->addRoute('ongoing_projects_view','OngoingProjectsView','index');
    //home finished projects view division vice
    $router->addRoute('finished_projects_view','FinishedProjectsView','finishedProjectsView');
    //home projects gallery view
    $router->addRoute('projects_view','ProjectsView','projectsView');
    //home annual reports
    $router->addRoute('annual_reports','AnnualReports','annualReports');
    //email_verify
    $router->addRoute('email_verify','EmailVerify','index');
    //password_reset
    $router->addRoute('password_reset','PasswordReset','index');
    //contractor_page
    $router->addRoute('contractors','Contractor','contractor');
    //contractor register
    $router->addRoute('contractor_register','ContractorRegister','contractorRegister');
    //contractor view bid callings
    $router->addRoute('home_view_bid_callings','ViewBidCallings','viewBidCallings');
    //projects
    $router->addRoute('projects','Projects','index');
    //aboutus
    $router->addRoute('about_us','AdminAboutUs','aboutUs');


    /*--------------------division---------------------*/
    $router->addRoute('div_home','DivHome','divHome');
    //division add montly report
    $router->addRoute('add_monthly_report','DivAddMonthlyReport','addMonthlyReport');
    //division add project proposal
    $router->addRoute('add_proposal','DivAddProposal','divAddProposal');
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
    //district edit funds record
    $router->addRoute('dis_edit_funds','DisEditFundsRecord','disEditFundsRecord');
    //district generate report
    $router->addRoute('dis_generate_report','DisGenerateReport','disGenerateReport');
    //district notifications
    $router->addRoute('dis_notifications','DisNotifications','disNotifications');
    //district monthly report
    $router->addRoute('dis_view_monthly_report','DisViewMonthlyReport','disViewMonthlyReport');
    //district project proposal
    $router->addRoute('dis_view_project_proposal','DisViewProjectProposals','disViewProjectProposals');
    //district funding agencies
    $router->addRoute('dis_funding_agencies','DisFundingAgencies','disFundingAgencies');

    /*---------------------admin----------------------*/
    $router->addRoute('admin_home','AdminHome','adminHome');
    //admin create account
    $router->addRoute('create_accounts','AdminCreateAccount','adminCreateAccount');
    //admin update account
    $router->addRoute('update_accounts','AdminUpdateAccount','adminUpdateAccount');
    //admin delete account
    $router->addRoute('delete_accounts','AdminDeleteAccount','adminDeleteAccount');
    //admin update about us
    $router->addRoute('update_about_us','UpdateAboutUsInfo','updateAboutUsInfo');
    

    /*--------------------contractor-----------------*/
    $router->addRoute('contractor_home','ContractorHome','contractorHome');
    //contractor notifications
    $router->addRoute('con_notifications','ContractorNotifications','contractorNotifications');
    //contractor sign up
    $router->addRoute('contractor_signup','ContractorSignUp','contractorSignUp');
    //contractor submit bid report
    $router->addRoute('submit_bid_report','ContractorSubmitBidReport','contractorSubmitBidReport');
    //contractor manage expenses
    $router->addRoute('manage_expenses','ContractorManageExpenses','contractorManageExpenses');
    //contractor add expenses
    $router->addRoute('add_expenses','ContractorAddExpenses','contractorAddExpenses');
    //contractor view bid callings
    $router->addRoute('view_bid_callings','ContractorViewBidCallings','contractorViewBidCallings');


    /*--------------------Logout-----------------*/
    $router->addRoute('logout','Logout','index');
    
    $app=new App($router);

?>