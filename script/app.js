window.addEventListener("scroll", function (e) {
  //will not work on IE 9
  var scrolled = this.window.scrollY;
  //will not work on IE 8
  const rocks = this.document.querySelector(".inner_img");
  rocks.style.top = -(scrolled * 0.2) + "px";
});
