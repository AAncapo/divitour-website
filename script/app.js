const ssTitle = document.querySelector(".ss-theme-title");
const ssDescription = document.querySelector(".ss-theme-desc");
const ssImage = document.querySelector(".ss-theme-image");

const prevSlideBtn = document.getElementById("prev_slide_button");
const nextSlideBtn = document.getElementById("next_slide_button");

let currSlideIndex = 0;

prevSlideBtn.addEventListener("click", function (e) {
  setCurrentSlide((currSlideIndex -= 1));
});
nextSlideBtn.addEventListener("click", function (e) {
  setCurrentSlide((currSlideIndex += 1));
});

function setCurrentSlide(idx) {
  let slides = [
    "images/themes_ss/0.jpg",
    "images/themes_ss/1.jpg",
    "images/themes_ss/2.jpg",
  ];
  if (idx > slides.length - 1) {
    currSlideIndex = 0;
  } else if (idx < 0) {
    currSlideIndex = slides.length - 1;
  }
  console.log(currSlideIndex);
  ssImage.setAttribute("src", slides[currSlideIndex]);
}

setCurrentSlide(0);

const redirectBtn = document.getElementById("redirect_btn");
redirectBtn.addEventListener("click", function (e) {
  window.location.href = "../destino.html";
});

//TODO: make a dictionary: slideshowTitle:Description:Image:link
//TODO: save in json file

/*const slideshowThemes = new Map();
slideshowThemes.set("expedition", ["Expediciones", "description empty"]);
slideshowThemes.set("course", [
  "Cursos",
  "Recibe tu certificacion con nuestros cursos.",
]);
slideshowThemes.set("immersion", ["Inmersiones", "description empty"]);
slideshowThemes.set("seafari", ["Seafari", "description empty"]);
slideshowThemes.set("super_reef", ["Super Reefs", "description empty"]);
slideshowThemes.set("tournament", ["Torneo", "description empty"]);

let currentSshowIndex = 0;

setSlideshowTheme("immersion");

function setSlideshowTheme(index) {
  ssTitle.innerHTML = slideshowThemes[index][0];
  ssDescription.innerHTML = slideshowThemes[index][1];
  //ssImage.setAttribute('image')
}
*/

//Parallax effect (descartado)
window.addEventListener("scroll", function (e) {
  //will not work on IE 9
  var scrolled = this.window.scrollY;
  //will not work on IE 8
  const rocks = this.document.querySelector(".novedades-section");
  rocks.style.top = -(scrolled * 0.2) + "px";
});
