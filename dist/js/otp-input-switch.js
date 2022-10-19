(function () {
    "use strict";

    var otpInput = document.querySelectorAll(".otp-input-group")[0];
    otpInput.addEventListener("keyup", function (e) {
        var t = e.target,
            n = parseInt(t.attributes.maxlength.value, 10),
            a = t.value.length;
        if (a >= n) {
            for (var r = t;
                (r = r.nextElementSibling) && null != r;)
                if ("input" === r.tagName.toLowerCase()) {
                    r.focus();
                    break
                }
        } else if (0 === a)
            for (var u = t;
                (u = u.previousElementSibling) && null != u;)
                if ("input" === u.tagName.toLowerCase()) {
                    u.focus();
                    break
                }
    });

})();