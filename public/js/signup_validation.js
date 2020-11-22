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
function checkPasswordPattern(){
    let password=document.getElementById('password').value;
    if(password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/)){
        document.getElementById("pattern").innerHTML="<i class='fas fa-check'></i>";
        document.getElementById("pattern").style.color="green";

    }
    else{
        document.getElementById("pattern").innerHTML="Invalid password pattern";
        document.getElementById("pattern").style.color="red";
    }

}
function confirmPassword(){
    let password=document.getElementById('password').value;
    let confirm_password=document.getElementById('confirm_password').value;
    if(password==confirm_password){
        document.getElementById("confirm_warning").innerHTML="<i class='fas fa-check'></i>";
        document.getElementById("confirm_warning").style.color="green";
    }
    else{
        document.getElementById( "confirm_warning").innerHTML="<i class='fas fa-times'></i>";
        document.getElementById("confirm_warning").style.color="red";
    }


}
function setUserID(){
    let prefix=document.getElementById('office_id').value;
    document.getElementById("user_id").value=prefix+getRandomDigits();
    
}
function getRandomDigits(){
    return Math.floor(Math.random() * (99-10))+10;
}
