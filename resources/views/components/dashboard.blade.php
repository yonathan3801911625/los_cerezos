
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
    height: 60vh;
  background-image: linear-gradient(
    to right bottom, rgba(90, 232, 140, 0.829), 
    rgba(201, 109, 35, 0.8)),
    url('');
  background-size: cover;
  
}

.text-box {
  position: absolute;
  top: 50%;
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

.btn:link,
.btn:visited {
  text-transform: uppercase;
  text-decoration: none;
  display: inline-block;
  border-radius: 100px;
  padding: 15px 40px;
  margin-top: 40px;
}

.btn:hover {
  transform: translateY(-3px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, .2);
}

.btn:active {
  transform: translateY(-1px);
  box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
}

.btn::after {
  content: "";
  display: inline-block;
  width: 100%;
  height: 100%;
  border-radius: 100px;
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  transition: all .4s;
}

.btn-call-to-action {
  background-color: #fff;
  color: #777;
  position: relative;
}

.btn-call-to-action::after {
  background-color: #fff;
}

.btn-call-to-action:hover::after {
  transform: scaleX(1.35) scaleY(1.55);
  opacity: 0;
}

.btn-animate {
  animation: moveUp .7s cubic-bezier(.64,.01,.49,1.76) .75s;
  animation-fill-mode: backwards;
}

@keyframes moveUp {
  0% {
    opacity: 0;
    transform: translateY(50px);
  }
  100% {
    opacity: 1;
    transform: translate(0);
  }
}


.card-image {
  display: block;
  min-height: 20rem; /* layout hack */
  background: #fff center center no-repeat;
  background-size: cover;
  /* blur the lowres image */
}

.card-image > img {
  display: block;
  width: 100%;
  opacity: 0; /* visually hide the img element */
}

.card-image.is-loaded {
  filter: none; /* remove the blur on fullres image */
  
}

html, body {
  width: 100%;
  height: 100%;
  margin: 0;
  font-size: 16px;
  font-family: sans-serif;
}

.card-list {
  display: block;
  margin:  auto;
  padding: 0;
  font-size: 0;
  text-align: center;
  list-style: none;
  background-color: black;

  
}



.card {
  display: inline-block;
  width: 90%;
  max-width: 20rem;
  margin: 1rem;
  font-size: 1rem;
  text-decoration: none;
  overflow: hidden;

 
}

.card:hover {
  transform: translateY(-0.5rem) scale(1.0125);


}

.card-description {
  display: block;
  padding: 1em 0.5em;
  color: #515151;
  text-decoration: none;
}

.card-description > h2 {
  margin: 0 0 0.5em;
}

.card-description > p {
  margin: 0;
}

.autor{

    background-color: black
}




</style>

<!-- Navbar -->

<!-- Navbar -->

<!-- Background image -->

<header class="header">

  <div class="text-box">
    <h1 class="heading-primary">
      <span class="heading-primary-top">BIENVENIDO</span> 
      <span class="heading-primary-bottom">¡Finca agroSENA 4.0!</span>
    </h1>

  </div>
</header>

<ul class="card-list">
   


  <li class="card">
    <a class="card-image" href="IMG_5.JPG" target="_blank" style="background-image: url(IMG_5.JPG);">
      <img src="IMG_5.JPG" alt="Psychopomp" />
    </a>
    <a class="card-description" href="IMG_5.JPG" target="_blank">
        <span class="heading-primary-bottom">¡ver imagen!</span>
      
    </a>
  </li>
  <li class="card">
    <a class="card-image" href="portafa.JPG" target="_blank" style="background-image: url(portafa.JPG);">
      <img src="portafa.JPG" alt="Psychopomp" />
    </a>
    <a class="card-description" href="portafa.JPG" target="_blank">
        <span class="heading-primary-bottom">¡ver imagen!</span>
    </a>
  </li>
  
  <li class="card">
    <a class="card-image" href="vaca.JPG" target="_blank" style="background-image: url(vaca.JPG);">
      <img src="vaca.JPG" alt="Psychopomp" />
    </a>
    <a class="card-description" href="vaca.JPG" target="_blank">
        <span class="heading-primary-bottom">¡ver imagen!</span>
    </a>
  </li>


  <li class="card">
    <a class="card-image" href="IMG_1.JPG" target="_blank" style="background-image: url(IMG_1.JPG);">
      <img src="IMG_1.JPG" alt="Psychopomp" />
    </a>
    <a class="card-description" href="IMG_1.JPG" target="_blank">
        <span class="heading-primary-bottom">¡ver imagen!</span>
    </a>
  </li>
  
  <li class="card">
    <a class="card-image" href="IMG_2.JPG" target="_blank" style="background-image: url(IMG_2.JPG);">
      <img src="IMG_2.JPG" alt="Psychopomp" />
    </a>
    <a class="card-description" href="IMG_2.JPG" target="_blank">
        <span class="heading-primary-bottom">¡ver imagen!</span>
    </a>
  </li>

  <li class="card">
    <a class="card-image" href="IMG_3.JPG" target="_blank" style="background-image: url(IMG_3.JPG);">
      <img src="IMG_3.JPG" alt="Psychopomp" />
    </a>
    <a class="card-description" href="IMG_3.JPG" target="_blank">
        <span class="heading-primary-bottom">¡ver imagen!</span>
    </a>
  </li>
  <br>

 
</ul>
<div class="autor">
    <br/>
    <br/>
    <span id= "autor" class="heading-primary-bottom">La imagenes fueron tomadas por Ana Morales</span>
    <br/>
    <br/>
    <br/>
    
</div>