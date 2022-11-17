
<style>
  /* Default height for small devices */
  @import url('https://fonts.googleapis.com/css?family=Lato');

* {
margin: 0;
padding: 0;
box-sizing: border-box;
}

body {
font-family: 'Lato', sans-serif;
font-weight: 400;
font-size: 15px;
line-height: 1.7;
color: #fff;
}


.header {
height: 50vh;
background-image: linear-gradient(
  to right bottom, rgba(90, 232, 140, 0.829), 
  rgba(201, 109, 35, 0.8)),
  url('');

background-size: cover;

}

.text-box {
position: absolute;
top: 30%;
left: 50%;
text-align: center;
transform: translate(-50%, -50%);
}

.heading-primary-top {
display: block;
font-size: 55px;
text-transform: uppercase;
letter-spacing: 20px;
}

.heading-primary-bottom {
display: block;
font-size: 18px;
letter-spacing: 7px;
font-weight: 700;
text-align: center;
}

.carousel-inner {

height: 500px;
}

.carousel-inner img{

width: auto; 
max-height: 100%; 
}

.carousel-control-prev{
  display: block;
  width: 60px;
  height: 80px;
  border-radius: 50%;
  background-color:black;
  margin-top:195px; 
}

.carousel slide{
  height: 400px;
}

.carousel-control-next{
  display: block;
  width: 60px;
  height: 80px;
  border-radius: 50%;
  background-color:black;
  margin-top:195px; 
}

</style>



<header class="header">

<div class="text-box">
  <h1 class="heading-primary">
    <span class="heading-primary-top">BIENVENIDO</span> 
    <span class="heading-primary-bottom">¡Finca agroSENA 4.0!</span>
  </h1>

</div>

</header>
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
<div class="carousel-inner">

  <div class="carousel-item active">
    <img src="IMG_1.JPG" class="d-block w-100" alt="...">
  </div>

  <div class="carousel-item">
    <img src="portafa.JPG" class="d-block w-100" alt="...">
  </div>

  <div class="carousel-item">
    <img src="vaca.JPG" class="d-block w-100" alt="...">
  </div>

  <div class="carousel-item">
    <img src="IMG_4.JPG" class="d-block w-100" alt="...">
  </div>

  <div class="carousel-item">
    <img src="IMG_5.JPG" class="d-block w-100" alt="...">
  </div>

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">

  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>

</button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>