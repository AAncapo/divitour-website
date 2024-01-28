const accountButton = document.getElementById("account-btn");
const accountTools = document.querySelector(".account-tools");

let isAccountToolsVisible = false;
accountButton.addEventListener("click", function (e) {
  if (!isAccountToolsVisible) {
    isAccountToolsVisible = true;
    accountTools.style.right = 0 + "px";
  } else {
    accountTools.style.right = -420 + "px";
    isAccountToolsVisible = false;
  }
});

//Parallax effect (descartado)
/*window.addEventListener("scroll", function (e) {
  //will not work on IE 9
  var scrolled = this.window.scrollY;
  //will not work on IE 8
  const rocks = this.document.querySelector(".novedades-section");
  rocks.style.top = -(scrolled * 0.2) + "px";
});
*/

let index = 0;
//displayImages();
function displayImages() {
  let i;
  const images = document.getElementsByClassName("image");
  for (i = 0; i < images.length; i++) {
    images[i].style.display = "none";
  }
  index++;
  if (index > images.length) {
    index = 1;
  }
  images[index - 1].style.display = "block";
  setTimeout(displayImages, 5000);
}
