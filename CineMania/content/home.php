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
      overflow: hidden;
    }

    .slide {
      width: 100%;
      position: relative;
      margin: 0px;
    }

    .prev , .next{
      position: absolute;
      top: 50%;
      font-size: 30px;
      font-weight: bold;
      padding: 16px;
      margin-top: -22px;
      border-radius: 0 3px 3px 0;
      color: #f2f2f2;
      cursor: pointer;
    }

    .next{
      right: 0;
      border-radius: 10px 0px 0px 10px;
    }

    .prev {
      left: 0px;
      border-radius: 0px 10px 10px 0px;
    }

    .prev:hover, .next:hover {
      background-color: #00a3cc;
      color: #f2f2f2;
    }

    .navigate {
      cursor: pointer;
      height: 16px;
      width: 16px;
      background: #585858;
      border-radius: 50%;
      display: inline-block;
      margin-top: 10px;
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

    .ImgTransition{
    animation-name: ImgTransition;
    animation-duration: 1.2s;
    }

    @keyframes ImgTransition{
      from {
        transform: scale3d(1, 1, 1);
      }

      50% {
        transform: scale3d(1.05, 1.05, 1.05);
      }

      to {
        transform: scale3d(1, 1, 1);
      }
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

    .bg-modal1, .bg-modal2 {
    	background-color: rgba(0, 0, 0, 0.8);
    	width: 100%;
    	height: 100%;
      position: absolute;
    	top: 0;
      left: 0;
    	display: none;
    	justify-content: center;
    	align-items: center;
    }

    .modal-contents1 {
    	height: 250px;
    	width: 400px;
    	background-color: white;
    	text-align: center;
    	padding: 20px;
    	position: relative;
    	border-radius: 10px;
    }

    .modal-contents2 {
    	height: 500px;
    	width: 400px;
    	background-color: white;
    	text-align: center;
    	padding: 20px;
    	position: relative;
    	border-radius: 10px;
    }

    input {
    	margin: 15px auto;
    	display: block;
    	width: 50%;
    	padding: 8px;
    	border: 1px solid gray;
    }

    .close1, .close2 {
    	position: absolute;
    	top: 0;
    	right: 10px;
    	font-size: 42px;
    	color: #00a3cc;
    	transform: rotate(45deg);
    	cursor: pointer;
    	&:hover {
    	color: #33d6ff;
    	}
    }

    .button {
      background-color: #00a3cc;
      border: 2px solid white;
      border-radius: 30px;
      text-decoration: none;
      padding: 10px 28px;
      color: white;
      margin-top: 10px;
      display: inline-block;
      &:hover {
      background-color: white;
      color: $blue;
      border: 2px solid $blue;
	     }
    }

    .button:hover{
      background-color: #33d6ff;
    }

    </style>

    <div class = "slider">

      <div class="slide ImgTransition">
        <div>
          <img src = "home/1.jpg" style = "max-width:100%; height:auto;">
        </div>
        <div class = "movie">
          Film 1
        </div>
      </div>

      <div class = "slide ImgTransition">
        <div>
          <img src = "home/2.jpg" style = "max-width:100%; height:auto;">
        </div>
          <div class = "movie">
        Film 2
        </div>
      </div>

      <div class = "slide ImgTransition">
        <div>
          <img src = "home/3.jpg" style = "max-width:100%; height:auto;">
        </div>
        <div class = "movie">
          Film 3
        </div>
      </div>

      <div class = "slide ImgTransition">
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

    <div>
      <span class = "navigate" onclick = 'currentSlide(1)'> </span>
      <span class = "navigate" onclick = 'currentSlide(2)'> </span>
      <span class = "navigate" onclick = 'currentSlide(3)'> </span>
      <span class = "navigate" onclick = 'currentSlide(4)'> </span>
    </div>

    <section class="popup">
      <div class="popup-content">
        <a href="#" id="button" class="button">Bejelentkezés</a>
      </div>
    </section>

    <div class="bg-modal1">
      <div class="modal-contents1">
        <div class="close1">+</div>
        <form action="">
          <label>Email cím: </label>
          <input type="email" name="email">
          <label>Jelszó: </label>
          <input type="password" name="password">
          <a href="home.php" class="button">Bejelentkezés</a>
        </form>
      </div>
    </div>

    <section class="popup">
      <div class="popup-content">
        <a href="#" id="button2" class="button">Regisztráció</a>
      </div>
    </section>

    <div class="bg-modal2">
      <div class="modal-contents2">
        <div class="close2">+</div>
        <form action="">
          <label>Email cím: </label>
          <input type="email" name="email">
          <label>Jelszó: </label>
          <input type="password" name="password">
          <label>Vezetéknév: </label>
          <input type="text" name="lastname">
          <label>Keresztnév: </label>
          <input type="text" name="firstname">
          <label>Telefonszám: </label>
          <input type="text" name="phonenumber">
          <a href="home.php" class="button">Regisztráció</a>
        </form>
      </div>
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

      document.getElementById('button').addEventListener("click", function() {
	       document.querySelector('.bg-modal1').style.display = "flex";
      });

      document.querySelector('.close1').addEventListener("click", function() {
	       document.querySelector('.bg-modal1').style.display = "none";
       });

      document.getElementById('button2').addEventListener("click", function() {
 	       document.querySelector('.bg-modal2').style.display = "flex";
      });

      document.querySelector('.close2').addEventListener("click", function() {
 	       document.querySelector('.bg-modal2').style.display = "none";
      });

    </script>

  </body>
</html>
