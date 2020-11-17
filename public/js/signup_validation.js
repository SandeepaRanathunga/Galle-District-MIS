function signupValidate(){
    let user_id=document.getElementById('user_id').value;
    let office_id=document.getElementById('office_id').value;
    let password=document.getElementById('password').value;
    let confirm_password=document.getElementById('confirm_password').value;

    if(user_id.substring(0,5)!=office_id.substring(0,5)){
        alert("User ID format not match with the office!");
        return false;
    }
    if(password!=confirm_password){
        alert("password and confirm password must be same!");
        return false;
    }
    return true;
        
}