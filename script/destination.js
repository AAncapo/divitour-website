function loadPage(dName, dDesc, headImgSrc) {
  const headImg = document.querySelector(".header-image");
  const destName = document.getElementById("dest-name");
  const destDesc = document.querySelector(".dest-description");

  if (headImgSrc !== "") {
    headImg.firstElementChild.setAttribute("src", headImgSrc);
  }

  destName.innerText = dName;
  destDesc.innerText = dDesc;
}
