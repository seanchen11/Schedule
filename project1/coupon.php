  <?php
  include "header.php";
  ?>
   <!-- Main jumbotron for a primary marketing message or call to action -->

  <div class="slideshow-container">
    <div class="mySlides">
      <img class="myslides" src="image/camera.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <img class="myslides" src="image/coffee.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <img class="myslides" src="image/guitar.png" style="width:100%">
    </div>
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>
   </div>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>


    <script src="script/showSlide.js">
    </script>

    <?php
    include "footer.php";
    ?>
