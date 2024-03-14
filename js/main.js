function toggleReadMore() {
    var dots = document.querySelectorAll(".dots");
    var moreText = document.querySelectorAll(".more");
    var btnText = document.querySelectorAll(".toggle-readmore");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less";
      moreText.style.display = "inline";
    }
  }