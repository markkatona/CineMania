<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale-1.0">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

 <title>Movie slider</title>

 <style type="text/css">

 html, body{
 width: 100%;
 height: 100%;
 padding: 0;
 margin: 0px;
}

slider {
 display: block;
 width: 100%;
 height: 100%;
 background-color: #1f1f1f;
 overflow: hidden;
 position: absolute;
}

slider > * {
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
}
 </style>

</head>

<body>
 <slider>
  <slide><p>Film 1</p></slide>
  <slide><p>Film 2</p></slide>
  <slide><p>Film 3</p></slide>
  <slide><p>Film 4</p></slide>
 </slider>
</body>
</html>
