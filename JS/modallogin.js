var modalLog = document.querySelector(".login-hidden");
var modalReg = document.querySelector(".register-hidden");
var closeBtnlog = document.querySelector(".closeBtnlog");
var closeBtnreg = document.querySelector(".closeBtnreg");
var callBtn = document.querySelector(".LoginBtn");
var redirectLog = document.querySelector(".Signupbtn");
var redirectReg = document.querySelector(".Signinbtn");

callBtn.onclick = function () {
    modalLog.style.display = "block";
    console.log("works");
};

redirectLog.onclick = function () {
    modalReg.style.display = "block";
    modalLog.style.display = "none";
};

redirectReg.onclick = function () {
    modalLog.style.display = "block";
    modalReg.style.display = "none";
};

closeBtnlog.onclick = function () {
    modalLog.style.display = "none";
};

closeBtnreg.onclick = function () {
    modalReg.style.display = "none";
};