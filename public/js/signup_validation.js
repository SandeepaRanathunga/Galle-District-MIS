function signupValidate(){
    let password=document.getElementById('password').value;
    let confirm_password=document.getElementById('confirm_password').value;
    let warning;

    if(password!=confirm_password){
        warning="Password and confirm password must be same";
        return false;
    }
    return true;
        
}