<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="author: Mike Oles">
    <title>Mike Oles Website</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" href="./img/icon.png">
  </head>

  <body>
    <header>
      <nav>
        <ul>
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="contact.php">Contact</a>
          </li>
          <li>
            <a href="resume.php">Resume</a>
          </li>
        </ul>
      </nav>
      <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/master/devicon.min.css">
    </header>

    <section id="infoSection">
      <h1 class="name">
        Michael Oles
      </h1>
      <img id="logo" src="img/logo.png" alt="Pitt">
      <ul class="myInfo">
        <li>University of Pitsburgh </li>
        <li>Graduating Spring 2017 </li>
        <li>Bachelors In Computer Science </li>
        <li>Minor In Fitness </li>
      </p>
      <img class="profile" src="img/profile.jpg" alt="Michael Oles">
      <img class="profile" src="img/profile2.jpg" alt="Michael Oles">
      <h3>Where I've Lived</h3>
      <div id="map"></div>
      <script>
        function initMap() {
          var pitt = {lat: 40.437, lng: -79.957};
          var buffalo = {lat: 42.987919, lng: -78.702607};
          var middle = {lat: 41.5, lng: -79.3}
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 6,
            center: middle
          });
          var marker = new google.maps.Marker({
            position: pitt,
            map: map
          });
          var marker = new google.maps.Marker({
            position: buffalo,
            map: map
          });
        }
      </script>
    </section>

    <section class="codeInfo" class="appear">
      <section id="languagues" class="appear">
        <h2>Languages</h2>
        <ul>
          <li><i class="devicon-java-plain colored"></i> Java</li>
          <li><i class="devicon-c-plain colored"></i> C</li>
          <li><i class="devicon-cplusplus-plain colored"></i> C++</li>
          <li><i class="devicon-jquery-plain colored"></i> JQuery</li>
          <li><i class="devicon-javascript-plain colored"></i> JavaScript</li>
          <li><i class="devicon-html5-plain colored"></i> HTML</li>
          <li><i class="devicon-css3-plain colored"></i> CSS</li>
        </ul>
      </section>

      <section id="tools" class="appear">
        <h2>Tools</h2>
        <ul>
          <li><i class="devicon-git-plain colored"></i> Git</li>
          <li><i class="devicon-github-plain colored"></i> GitHub</li>
          <li><i class="devicon-bitbucket-plain colored"></i> BitBucket</li>
          <li><i class="devicon-php-plain colored"></i> PHP</li>
          <li><i class="devicon-android-plain colored"></i> Android</li>
          <li><i class="devicon-windows8-plain colored"></i> Windows</li>
          <li><i class="devicon-linux-plain colored"></i> Linux</li>
        </ul>
      </section>

      <section id="courses" class="appear">
        <h2>Courses Taken</h2>
        <ul>
          <?php
            $user = 'root';
            $pass = '';
            $db_name = 'coursework';

            $db = new mysqli('localhost',$user,$pass,$db_name) or die("Unable to connect");

            $sql = "SELECT Name FROM courses";
            $result = $db->query($sql);

            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                echo "<li>" . $row["Name"] . " </li>";
              }
            }else{
              echo "No courses taken";
            }

            $db->close();
          ?>
        </ul>
      </section>

      <section id="concepts" class="appear">
        <h2>Concepts</h2>

        <ul>
          <?php
            $concepts = array("Object Oriented Design","Data Structures","Operating Systems","Memory Allocation","Recursion","Searching/Sorting","Algorithms","Complexity","Reflection","Threading");
            foreach($concepts as &$value){
              echo "<li>" . $value . "</li>";
            }
          ?>
        </ul>
      </section>

    </section>

    <section id="experience">

      <h2>Experience</h2>
      <div class="appear">
        <h3>Avarint: Software Engineer Intern</h3>
        <img class="profile" class="appear" src="img/avarint.jpg" alt="Avarint">
      </div>
      <div class="appear">
        <h3>Pitt Computing Services: Computer Lab Consultant</h3>
        <img class="profile" class="appear" src="img/seal.jpg" alt="Cssd" width="500px" height="500px">
      </div>
      <div class="appear">
        <h3>Try-It Distributing: Merchandiser</h3>
        <img class="profile" class="appear" src="img/tryit.jpg" alt="Tryit" width="500px" height="500px">
      </div>
      <div class="appear">
        <h3>Pennapps Hackathon</h3>
        <img class="profile" class="appear" src="img/pennapps.png" alt="Pennapps">
      </div>
      <div class="appear">
        <h3>Randall Big Idea Competition Finalist</h3>
        <img class="profile" class="appear" src="img/bigidea.jpg" alt="Randall Big Idea">
      </div>
    </section>

    <footer>
      <p id="copyright">
        Michael Oles &copy 2016
      <p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6HoxAssIjgdTcSjwhQ8sOlIcYVSkbu30&callback=initMap">
    </script>
  </body>
</html>
