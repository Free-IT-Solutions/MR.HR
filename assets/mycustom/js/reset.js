function process(){
// (A) GET DATA
var data = new FormData();
// (B) AJAX SEND FORM
// NOTE: USE HTTP://. NOT FILE://.
var xhr = new XMLHttpRequest();
xhr.open('POST', "0-dummy.html");
xhr.onload = function () {
console.log(this.response);
document.getElementById("basicinfo-form").reset(); // RESET FORM
};
xhr.send(data);

// (C) STOP DEFAULT FORM SUBMIT/PAGE RELOAD

$('#fullname').val("my test");
return false;
}

function processinsurance(){
// (A) GET DATA
var data = new FormData();
// (B) AJAX SEND FORM
// NOTE: USE HTTP://. NOT FILE://.
var xhr = new XMLHttpRequest();
xhr.open('POST', "0-dummy.html");
xhr.onload = function () {
console.log(this.response);
document.getElementById("insuranceinfo-form").reset(); // RESET FORM
};
xhr.send(data);

// (C) STOP DEFAULT FORM SUBMIT/PAGE RELOAD
return false;
}
