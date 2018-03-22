<html>
<head><title></title>

<style>
p{
text-align:center;
font-size:30px;
font-color:white;
}


.container
{
width:1000px;
height:600px;
text-align:center;
background-color:#E2E2FA;

border-radius:4px;
margin:0 auto;
margin-top:20px;
}

.mySlides {display:none;}


*{margin:0; padding:0;}
#display{
  background:hsla(240, 71%, 93%, 1.0);
  height:80px;
  width:1000px;
  overflow:hidden;
  position:relative;
  margin:auto; /*for centering*/
}
#text{
  background:hsla(240, 71%, 93%, 1.0);
  cursor:pointer;
  overflow:hidden;
  position:absolute;
  left:10px;
  margin-right:10px;
  top:10px;
}








</style>
</head>

<?php
session_start();
if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	unset($_SESSION['admin']);
	unset($_SESSION['category']);
}
include('navbar.php');


?>


<html>
<body>

<div class="container">

<div id="display">
  <p id="text">Welcome to Multievent.. Login for more details.</p>
</div>

<div class="form-bg1" width="980px">
<img class="mySlides" src="trifles.jpg" width="980" height="500">
  <img class="mySlides" src="avalancheevent.jpg" width="980" height="500">
  <img class="mySlides" src="marathonevent.jpg" width="980" height="500">
  <img class="mySlides" src="rubixevent.jpg" width="980" height="500">
<img class="mySlides" src="contingentevent.jpg" width="980" height="500">
<img class="mySlides" src="oscillationevent.jpeg" width="980" height="500">
</div>


<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script>


var myIndex = 0;
banner1();

function banner1() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(banner1, 2000); // Change image every 2 seconds
}


function marquee(a, b) {
    var width = b.width();
    var start_pos = a.width();
    var end_pos = -width;

    function scroll() {
        if (b.position().left <= -width) {
            b.css('left', start_pos);
            scroll();
        }
        else {
            time = (parseInt(b.position().left, 10) - end_pos) *
                (10000 / (start_pos - end_pos)); // Increase or decrease speed by changing value 10000
            b.animate({
                'left': -width
            }, time, 'linear', function() {
                scroll();
            });
        }
    }

    b.css({
        'width': width,
        'left': start_pos
    });
    scroll(a, b);
    
    b.mouseenter(function() {     // Remove these lines
        b.stop();                 //
        b.clearQueue();           // if you don't want
    });                           //
    b.mouseleave(function() {     // marquee to pause
        scroll(a, b);             //
    });                           // on mouse over
    
}

$( document ).ready(function() {
    marquee($('#display'), $('#text'));  //Enter name of container element & marquee element
});



</script>
<br/>
<br/>
</div>
<br/>
<br/>
<br/>
<?php
include('footer.php');
?>

</body>
</html>