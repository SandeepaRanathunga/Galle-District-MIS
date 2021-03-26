function handleAccept() {
  document.querySelector('.popup_box').style.display = 'block';
  document.querySelector('.btn1').addEventListener('click', () => {
    document.getElementById('approve_form').submit();
    console.log('Hello Sandeepa');
  });
  cancel();
}

function handleReject() {
  document.querySelector('.popup_box').style.display = 'block';
  document.querySelector('.btn1').addEventListener('click', () => {
    document.getElementById('reject_form').submit();
    console.log('Hello Sandeepa');
  });
  cancel();
}
function cancel() {
  document.querySelector('.btn2').addEventListener('click', () => {
    document.querySelector('.popup_box').style.display = 'none';
  });
}

document.querySelector('.approve').addEventListener('click', handleAccept);
document.querySelector('.reject').addEventListener('click', handleReject);
