<html>
<title>OUR GALLERY</title>
<body style="background-color: black;overflow: hidden">


<div class="container" style="position: relative;left:210px;top: 70px;">
  <div class="display">
    <?php
        foreach(range(1,30) as $r){
            echo "<div class='mySlides'>
                    <img src='./hotel/pic$r.jpg' style='width:1000px;height:630px'>
                  </div>";
        }
    ?>
    <button style="position: relative;top:-350px;height:50px;width: 50px;background-color: black;color: white;animation:none" onclick="plusDivs(-1)">&#10094;</button>
    <button style="position: relative;top:-350px;left: 895px;height:50px;width: 50px;background-color: black;color: white" onclick="plusDivs(1)">&#10095;</button>
  </div>
  <a href="./home.php"><img src='./hotel/goback.png' style="height: 80px;width: 80px;position: relative;top:-750px;left:-190px"></a>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
  showDivs(slideIndex += n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>