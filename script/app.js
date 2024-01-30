const destBtn = document.getElementById("dest-btn");

destBtn.addEventListener("click", () => {
  //show result in filtered-content.container
});

// (in HTML) all skip-buttons must be "connected" to a .image-slideshow with the prop "id"=(the skip-button's "name")
let currIndex = 0;

let sliderImages = [
  "images/destinos/varadero/royalton-hicacos/varadero-hotel-royalton-hicacos.jpeg",
  "images/destinos/varadero/royalton-hicacos/varadero-hotel-royalton-hicacos1.jpeg",
  "images/destinos/varadero/royalton-hicacos/varadero-hotel-royalton-hicacos2.jpeg",
];
connectSkipButtons();
//setSlideshowImage(currIndex);

function connectSkipButtons() {
  const skipButtons = document.querySelectorAll(".skip-button");
  const imgSshows = document.querySelectorAll(".image-slideshow");

  //loop thru all image-slideshows and for each one loop thru all the skipbuttons to find their partner
  imgSshows.forEach((iss) => {
    skipButtons.forEach((sb) => {
      if (sb.name == iss.id) {
        sb.addEventListener("click", function (e) {
          let act;
          sb.className == "btn-left" ? (act = "prev") : (act = "next");
          setSlideshowImage(iss, act);
        });
      }
    });
  });
}

function setSlideshowImage(container, action) {
  // Animate images
  currIndex += 1 ? action == "next" : (currIndex -= 1);
  if (currIndex > sliderImages.length - 1) {
    currIndex = 0;
  } else if (currIndex < 0) {
    currIndex = sliderImages.length;
  }
  console.log(currIndex);
  container.setAttribute("src", sliderImages[currIndex]);
}

const accountButton = document.getElementById("account-btn");
const accountTools = document.querySelector(".account-tools");

// Toggle Account button ((TODO: buttons have a toggle prop, dummy))
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

//Parallax effect (descartado)
/*window.addEventListener("scroll", function (e) {
  //will not work on IE 9
  var scrolled = this.window.scrollY;
  //will not work on IE 8
  const rocks = this.document.querySelector(".novedades-section");
  rocks.style.top = -(scrolled * 0.2) + "px";
});
*/
