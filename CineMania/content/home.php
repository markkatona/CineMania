<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Movie slider</title>
  </head>

  <body>

    <style type="text/css">

    body{
      font-family: Arial;
      width: 50%;
      height: 50%;
      margin: 70px auto;
    }

    .slider {
      width: 100%;
      position: relative;
      margin: 0px;
    }

    .slide {
      width: 100%;
      position: relative;
      margin: 0px;
    }

    .prev , .next{
      position: absolute;
      top: 50%;
      font-size: 18px;
      font-weight: bold;
      padding: 16px;
      margin-top: -22px;
      border-radius: 0 3px 3px 0;
      color: #f2f2f2;
      cursor: pointer;
    }

    .next{
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    .prev {
      left: 0px;
      border-radius: 3px 0px 0px 3px;
    }

    .movie{
      text-align: center;
      position: absolute;
      bottom: 20px;
      width: 100%;
      color: #f2f2f2;
      font-size: 15px;
      padding: 5px 0px;
    }

    /*slider > * {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    background: #1f1f1f;
    animation: slide 12s infinite;
    overflow: hidden;
    }

    slide:nth-child(1){
    left: 0%;
    animation-delay: -1s;
    background-image: url(home/1.jpg);
    background-size: cover;
    background-position: center;
    }

    slide:nth-child(2){
    left: 100%;
    animation-delay: 2s;
    background-image: url(home/2.jpg);
    background-size: cover;
    background-position: center;
    }

    slide:nth-child(3){
    left: 100%;
    animation-delay: 5s;
    background-image: url(home/3.jpg);
    background-size: cover;
    background-position: center;
    }

    slide:nth-child(4){
    left: 100%;
    animation-delay: 8s;
    background-image: url(home/4.jpg);
    background-size: cover;
    background-position: center;
    }

    slide p {
    font-family: Arial;
    font-size: 70px;
    text-align: center;
    display: inline-block;
    width: 100%;
    margin-top: 340px;
    color: #fff;
    }

    @keyframes slide {
    0% { left: 100%; width: 100%; }
    5% { left: 0%; }
    25% { left: 0%; }
    30% { left: -100%; width: 100%; }
    30.0001% { left: -100%; width: 0%; }
    100% { left: 100%; width: 0%; }
    }*/

    </style>

    <div class = "slider">

      <div class="slide">
        <div>
          <img src = "home/1.jpg" style = "max-width:100%; height:auto;">
        </div>
        <div class = "movie">
          Film 1
        </div>
      </div>

      <div class = "slide">
        <div>
          <img src = "home/2.jpg" style = "max-width:100%; height:auto;">
        </div>
          <div class = "movie">
        Film 2
        </div>
      </div>

      <div class = "slide">
        <div>
          <img src = "home/3.jpg" style = "max-width:100%; height:auto;">
        </div>
        <div class = "movie">
          Film 3
        </div>
      </div>

      <div class = "slide">
        <div>
          <img src = "home/4.jpg" style = "max-width:100%; height:auto;">
        </div>
        <div class = "movie">
          Film 4
        </div>
      </div>

    <a class = "prev" onclick = "changePage(-1)">
      &#10094;
    </a>

    <a class = "next" onclick = "changePage(1)">
      &#10095;
    </a>

    </div>

    <script type = "text/javascript">

      var pageIndex = 1;
      var elapsedTime;

      window.addEventListener("load",function() {
          showPage(pageIndex);
          elapsedTime = setInterval(function(){changePage(1)}, 3000);
      })

      function changePage(n){
        clearInterval(elapsedTime);
        if (n < 0){
          showPage(pageIndex -= 1);
        } else {
         showPage(pageIndex += 1);
        }

        if (n === -1){
          elapsedTime = setInterval(function(){changePage(n + 2)}, 3000);
        } else {
          elapsedTime = setInterval(function(){changePage(n + 1)}, 3000);
        }
      }

      function currentSlide(n) {
        clearInterval(elapsedTime);

        elapsedTime = setInterval(function(){
          changePage(n + 1);
        }, 3000);

        showPage(pageIndex = n);
      }

      function showPage(n){

      var i;
      var slides = document.getElementsByClassName("slide");

      if (n > slides.length) {
        pageIndex = 1;
      };

      if (n < 1) {
        pageIndex = slides.length;
      };

      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      };

      slides[pageIndex-1].style.display = "block";

      }

    </script>

  </body>
</html>
