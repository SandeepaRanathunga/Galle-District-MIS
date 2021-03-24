function signupValidate() {
  let email = document.getElementById('email').value;
  console.log(email);

  if (!validateEmail(email)) {
    alert('Email format is not valid!');
    return false;
  }
  if (emailExist(email)) {
    alert('Email already exist!');
    return false;
  }
  return true;
}
function checkPasswordPattern() {
  let password = document.getElementById('password').value;
  if (
    password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/) &&
    password != ''
  ) {
    document.getElementById('pattern').innerHTML =
      "<i class='fas fa-check'></i>";
    document.getElementById('pattern').style.color = 'green';
  } else if (password == '') document.getElementById('pattern').innerHTML = '';
  else {
    document.getElementById('pattern').innerHTML = 'Invalid password pattern';
    document.getElementById('pattern').style.color = 'red';
  }
}

function confirmPassword() {
  let password = document.getElementById('password').value;
  let confirm_password = document.getElementById('confirm_password').value;
  if (password == confirm_password && password != '') {
    document.getElementById('confirm_warning').innerHTML =
      "<i class='fas fa-check'></i>";
    document.getElementById('confirm_warning').style.color = 'green';
  } else if (confirm_password == '')
    document.getElementById('confirm_warning').innerHTML = '';
  else {
    document.getElementById('confirm_warning').innerHTML =
      "<i class='fas fa-times'></i>";
    document.getElementById('confirm_warning').style.color = 'red';
  }
}
function validateEmail(email) {
  const regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return regex.test(String(email).toLowerCase());
}
function setUserID() {
  let prefix = document.getElementById('office_id').value;
  document.getElementById('user_id').value = prefix + getRandomDigits();
}
function emailExist($email) {
  console.log($emails);
}
function getRandomDigits() {
  return Math.floor(Math.random() * (99 - 10)) + 10;
}
