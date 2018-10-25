<!Doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>www.jquery</title>
<style>
button{
margin-left:10px;}
#button1{
margin-left:50%;}
fieldset{
width:950px;
background:#ddd;
}
img{
display:none;
}
</style>
</head>
  <script src="js/jquery-3.2.1.min.js"></script>

  <script>
$(document).ready(function(){
    $("button").click(function(){
        $("#div1").fadeIn();
        $("#div2").fadeIn("slow");
        $("#div3").fadeIn(3000);
        $("#div4").fadeIn(4000);
    });
	
    $("#button1").click(function(){
        $("#div1").fadeOut();
        $("#div2").fadeOut("slow");
        $("#div3").fadeOut(3000);
        $("#div4").fadeOut(4000);
    });
});
</script>
</head>
<body>

<fieldset>
<legend>My Photogellay</legend>
<button>Go </button>
<button id="button1">Back</button>
<h1>Our school family Photo</h1>
<img id="div1" src="image/data.jpg" alt="simple image" width="150px"/><br><br/>
<img id="div2" src="image/images.jpg" alt="simple image"width="150px"/><br/><br/>
<img id="div3" src="image/pic.jpg" alt="simple image"width="150px"/><br/><br/>
<img id="div4" src="image/kk.jpg" alt="simple image"width="150px"/>
</fieldset>
</body>
</html>
