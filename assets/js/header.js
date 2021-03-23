document.getElementById("header-nav").style.display = "none";
var isDispHeaderNav = false;

document.getElementById("menu-icon").onclick = function () {
  if (isDispHeaderNav) {
    document.getElementById("header-nav").style.display = "none";
  } else {
    document.getElementById("header-nav").style.display = "";
  }
  isDispHeaderNav = !isDispHeaderNav;
};
