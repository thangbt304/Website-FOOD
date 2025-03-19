let form_menu = document.querySelector('.menudoc');
let menu_js = document.getElementById('click_menu');
let xoa_js = document.getElementById('xoa');


menu_js.addEventListener('click', () => {
    form_menu.style.display = 'flex';
} );

xoa_js.addEventListener('click', () => {
    form_menu.style.display = 'none';
} )



function lienhe(){
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let chat = document.getElementById("chat").value;

    let errorName = document.getElementById("errorname");
    let errorPhone = document.getElementById("errorphone");
    let errorChat = document.getElementById("errorchat");

// Xóa thông báo lỗi trước khi kiểm tra lại
errorName.textContent = "";
errorPhone.textContent = "";
errorChat.textContent = "";


if (name,phone,chat.length == 0) {
    errorName.textContent = "*Không được để trống.";
    errorPhone.textContent = "*Không được để trống.";
    errorChat.textContent = "*Không được để trống.";
return false;
}

// Nếu tất cả điều kiện đều đúng, hiển thị thông báo xác nhận
let confirmed = confirm("Đã gửi thành công!");
if (confirmed) {
document.getElementById("email").value = "";
document.getElementById("password").value = "";
}
}



// xác minh tài khoảng
function login(){
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let emailError = document.getElementById("emailError");
    let passwordError = document.getElementById("passwordError");

// Xóa thông báo lỗi trước khi kiểm tra lại
emailError.textContent = "";
passwordError.textContent = "";

// Kiểm tra email và kiểm tra password
let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
if(email.length == 0 && password.length == 0) {
    emailError.textContent = "*Vui lòng không để trống.";
    passwordError.textContent = "*Không để trống.";
    return false;
}

// Kiểm tra email
if (!email.match(emailPattern)) {
emailError.textContent = "*Vui lòng nhập địa chỉ email hợp lệ.";
return false;
}



// kiểm tra password
if (password.length <= 11) {
passwordError.textContent = "*Nhập chưa đủ kí tự.";
return false;
}

// Nếu tất cả điều kiện đều đúng, hiển thị thông báo xác nhận
window.location.href = '/index.html';
let confirmed = confirm("Thành công!");

if (confirmed) {
document.getElementById("email").value = "";
document.getElementById("password").value = "";
}
}