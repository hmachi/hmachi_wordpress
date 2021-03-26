var isSessionFirst = sessionStorage.getItem("yashiroyachi.disp.first");

if (isSessionFirst) {
  document.getElementById("first-image-wrap").hidden = true;
} else {
  sessionStorage.setItem("yashiroyachi.disp.first", 1);
}
