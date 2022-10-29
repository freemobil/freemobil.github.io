(function () {
  "use strict";

  // Dark Mode JS
  var toggleSwitch = document.getElementById("darkSwitch");
  var currentTheme = localStorage.getItem("theme");

  if (currentTheme) {
    document.documentElement.setAttribute("data-theme", currentTheme);
    if (currentTheme === "dark") {
      if (toggleSwitch) {
        toggleSwitch.checked = true;
      }
    }
  }

  function switchTheme(e) {
    if (e.target.checked) {
      document.documentElement.setAttribute("data-theme", "dark");
      localStorage.setItem("theme", "dark");
    } else {
      document.documentElement.setAttribute("data-theme", "light");
      localStorage.setItem("theme", "light");
    }
  }

  if (toggleSwitch) {
    toggleSwitch.addEventListener("change", switchTheme, false);

    toggleSwitch.addEventListener("click", function () {
      var dmContainer = document.querySelector(".dark-mode-switching");
      dmContainer.style.display = "block";
      dmContainer.style.opacity = 1;

      setTimeout(function () {
        var fadeOut2 = setInterval(function () {
          if (!dmContainer.style.opacity) {
            dmContainer.style.opacity = 1;
          }
          if (dmContainer.style.opacity > 0) {
            dmContainer.style.opacity -= 0.1;
          } else {
            clearInterval(fadeOut2);
            dmContainer.style.display = "none";
          }
        }, 20);
      }, 1000);
    });
  }

  // RTL Mode JS
  var rtltoggleSwitch = document.getElementById("rtlSwitch");
  var rtlcurrentTheme = localStorage.getItem("rtl");

  if (rtlcurrentTheme) {
    document.documentElement.setAttribute("view-mode", rtlcurrentTheme);
    if (rtlcurrentTheme === "rtl") {
      if (rtltoggleSwitch) {
        rtltoggleSwitch.checked = true;
      }
    }
  }

  function rtlswitchTheme(e) {
    if (e.target.checked) {
      document.documentElement.setAttribute("view-mode", "rtl");
      localStorage.setItem("rtl", "rtl");
    } else {
      document.documentElement.setAttribute("view-mode", "ltr");
      localStorage.setItem("rtl", "ltr");
    }
  }

  if (rtltoggleSwitch) {
    rtltoggleSwitch.addEventListener("change", rtlswitchTheme, false);

    rtltoggleSwitch.addEventListener("click", function () {
      var rmContainer = document.querySelector(".rtl-mode-switching");
      rmContainer.style.display = "block";
      rmContainer.style.opacity = 1;

      setTimeout(function () {
        var fadeOut3 = setInterval(function () {
          if (!rmContainer.style.opacity) {
            rmContainer.style.opacity = 1;
          }
          if (rmContainer.style.opacity > 0) {
            rmContainer.style.opacity -= 0.1;
          } else {
            clearInterval(fadeOut3);
            rmContainer.style.display = "none";
          }
        }, 20);
      }, 1000);
    });
  }

})();