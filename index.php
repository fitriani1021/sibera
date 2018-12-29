<style>
html,
body {
  font-family: 'Open Sans', sans-serif;
  text-align: center;
}

* {
  margin: 0;
  padding: 0;
}

.intro {
  top: 0;
  background: #E0FFFF;
  min-height: 55vh;
  padding-top: 45vh;
  text-align: center;
  /*   line-height: 100vh; */
  /*   width:100%;
  height:96vh;
border:solid; */
}

.intro p {
  color: green;
}

nav ul {
  text-align: right;
  position: fixed;
  width: 100%;
  background-color: #E0FFFF;
}

nav ul {
  text-align: right;
  position: fixed;
  width: 100%;
  background-color: #E0FFFF;
}

nav ul li {
  display: inline-block;
  margin: 55px;
  margin-bottom: 15px;
  margin-top: 25px;
}

nav ul li a {
  color: #008080;
  text-decoration: none;
}

nav ul li a:hover {
  color: green;
}

.level {
  top: 0;
  background: #e0ebe8;
  min-height: auto;
  padding-top: auto;
  /*   line-height: 100vh; */
  /*   width:100%;
  height:96vh;
border:solid; */
}

.work {
  padding-top: 60px;
  margin-top: -60px;
}

.work .work-header {
  margin-top: 50px;
  color: #008080;
  font-weight: normal;
}

.level {
  text-decoration: none;
  color: #F5FFFA;
  display: inline-block;
  overflow: hidden;
  border: 2px solid lightblue;
  height: auto;
  width: auto;
  margin: 40px 100px;
  /*   background: url("https://res.cloudinary.com/dck40m3wf/image/upload/v1455459914/Portfolio/fancy-floral-pattern-384.jpg") repeat; */
}

.level-pic {
  width: 100%;
  height: auto;
  border-bottom: 2px solid lightblue;
}

.level-title {
  font-weight: bold;
}

.show-all {
  text-decoration: none;
  display: block;
  width: 200px;
  height: 30px;
  margin: 20px auto 90px;
   background: #e0ebe8;
  color: #008080;
  font-weight: bold;
  font-size: 1em;
  border: 2px solid #90C695;
  border-radius: 4px;
  cursor: pointer;
  padding-top:10px;
}

li {
  text-align: center;
  
}

.show-all:hover {
  background: #E4F1FE;
  color: green;
}

@media only screen and (max-width: 500px) {
  nav ul {
    text-align: center;
  }
  nav ul li {
    margin: 20px;
  }
  .project {
    margin: 40px 0;
  }
}

.contact {
  /*   height:800px; */
  /*   min-height:800px; */
  background: #C8F7C5;
  padding-bottom: auto;
}

.header {
  text-align:center;
}

.contact-details {
  display: inline-block;
  font-weight: bold;
  margin: 0 35px 45px 35px;
  list-style-type: none;
  border: 2px solid #90C695;
  border-radius: 100%;
  width: 100px;
  height: 100px;
  line-height: 100px;
  background: #e0ebe8;
  color: #008080;
  text-decoration: none;
}

.contact-details:hover {
  background: #E4F1FE;
  color: green;
}

footer {
  padding: 20px;
  background: #22313F;
  color: white;
  line-height: 40px;
}

footer a {
  color: white;
}

.welcome-section {
    text-align: center;
}

@media only screen and (max-width: 367px) {
  /*    #contact{
    min-height:1100px;
  } */
  .contact-details {
    border: 2px solid #90C695;
    border-radius: 0;
    width: 90px;
    height: 20px;
    padding: 10px;
    line-height: normal;
  }
}</style>

<html lang="en, kr">
<body>

<nav>
  <ul id='navbar'>
    <li><a href="#welcome-section">Home</a></li>
    <li><a href="#level">Levels</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="login.html">Login</a></li>
  </ul>
</nav>

<div id="welcome-section" class="intro">

  <h1>Selamat Datang</h1>
  <h2>안녕하세요</h2>
  <img class="logo" src="images\logo.png">
  <p>Selamat Belajar ^^</p>
  <p>열심히 공부를 하십시오</p>
  <button>

</div>
<div id="level" class="level">
    <h2 class="work-header">Select your level</h2>
    <a href="#" target="_blank" class="level level-title">
        <img class="level1" src="http://www.aettraininghubs.org.uk/wp-content/uploads/2012/05/Level1.png" alt="level">
        <div class="level-title">Level1</div>
    </a>
    <a href="#" target="_blank" class="level level-title">
        <img class="level2" src="http://www.aettraininghubs.org.uk/wp-content/uploads/2012/05/Level2.png" alt="level">
        <div class="level-title">Level2</div>

</div>
</div>

<div id="about" class="contact">
  <div class="header">
    <h1>Contacts</h1>
  </div>
  <a href="https://facebook.com/fitrianyelf" target="_blank" class="contact-details">Facebook</a>
  <a id='profile-link' href="https://github.com/fitriani1021" target="_blank" class="contact-details">GitHub</a>
  <a href="mailto:fitri.tpdua@gmail.com" class="contact-details">Send a mail</a>
  <a href="tel:+62822-8275-5765" class="contact-details">Call me</a>
</div>
<footer>
  <p>&copy; Created for <a href="https://github.com/fitriani1021" target="_blank">GitHub</a></p>
</footer>
</body>