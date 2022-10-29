"use strict";

var resendOTP = document.getElementById("resendOTP");

if(resendOTP) {
    var optcount = 90;
    var optcounter = setInterval(otptimer, 1000);
    
    function otptimer() {
        optcount = optcount - 1;
    
        if (optcount <= 0) {
            clearInterval(optcounter);
            resendOTP.innerHTML = '<a class="resendOTP" href="">Resend OTP</a>';
        } else {
            resendOTP.innerHTML = 'Wait ' + optcount + ' secs';
        }
    
        if (optcount <= 10) {
            resendOTP.style.color = "red";
        }
    }
}