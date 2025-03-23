<!Doctype Html>
<html>
    <head>
        <title>Art Blog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width initial scale=1.0">
        <link rel="stylesheet" href="artistictimes.css">
        <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
        <link rel="icon" type="image/x-icon" href="favicon (1).ico">
    </head>
    <style>
.title{
    text-align: center;
    background-color: rgba(205, 243, 243, 0.456);
    margin-top:-36px;
    padding:12px;
    
    
    
}
section{
  margin:30px;
    
}
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 6px;
 
  
  
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.container {
  padding: 64px;
}

/* Clear floats */
.row:after {
  content: "";
  display: table;
  clear: both
}

/* 2/3 column */
.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

/* 1/3 column */
.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

/* Add responsiveness - make the columns appear on top of each other instead of next to each other on small screens */
@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
}
.sub{
    padding:70px;
    border:0.2px solid grey;
   border-radius: 12px;
   margin:25px;
   box-sizing:border-box;


}
section{
  width:70%;
 
  margin-left:210px;
}
.column p {
  font-size:25px;font-family:'annie use your telescope';font-weight:800;
}

.column1 {
                float: left;
                width: 50%;
                padding: 10px;
                height: 501px;
                margin:1px;/* Should be removed. Only for demonstration */
                font-size:22px;font-family:'annie use your telescope';font-weight:800;
              }
              .column2{
              float:right;
              width: 43%;
               height: 200px;
              padding: 10px;
              }
              .column3{
              float:right;
              width: 43%;
               height: 270px;
              padding: 10px;
              margin-top:10px;
              }
              /* Clear floats after the columns */
              .rows:after {
                content: "";
                display: table;
                clear: both;
              }



          /* Styles for the "Leave us a Comment" form */
.comment-form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    background-color: #fdfcfc;
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

label {
    margin-bottom: 8px;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #007BFF;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.2s;
}

button:hover {
    background-color: #0056b3;
}

div.gallery ul li, div.gallery li img {
	-webkit-transition: all 0.1s ease-in-out;
  	-moz-transition: all 0.1s ease-in-out;
  	-o-transition: all 0.1s ease-in-out;
  	transition: all 0.1s ease-in-out;
}


/*new*/
.image-containers {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Three columns */
    grid-gap: 50px; /* Adjust the gap between images */
    max-width: 800px; /* Adjust the maximum width of the image container */
    justify-content: center;
    align-items: center;
   
}

.image-wrapper {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
}

.image-wrapper img {
    width: 100%;
    height: auto;
    display: block;
    border-radius:50%;
}
.img1{
  position:relative;
}
.img2{
  position:absolute;
  width:30px;
}
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: rgba(246, 246, 246, 0.5); /* Adjust the overlay color and opacity */
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease; /* Smooth transition effect */
}

.overlay button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #000000;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.2s; /* Optional: Add a smooth background color transition on hover */
}

.overlay button:hover {
    background-color: #000000;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: rgba(246, 246, 246, 0.5); /* Adjust the overlay color and opacity */
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity 0.3s ease; /* Smooth transition effect */
}

.overlay button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #000000;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.2s; /* Optional: Add a smooth background color transition on hover */
}

.overlay button:hover {
    background-color: #000000;
}

.image-container:hover .overlay {
    opacity: 1;
}
.image-container {
    position: relative;
    display: inline-block;
    cursor: pointer;
}
.image-wrapper p{
  text-align:center;
  font-family:'annie use your telescope';
  font-size:26px;
  font-weight:800;
  color:;
}
    </style>
    <body>
        <header>
            <div class="heading">
                
                
            
                <img src="Artistic.png" style="float:center;background-color:white;" class="headimg"> </div>
                

            </div>

        </header>
      <nav>
        <div class="navbar">
            <a href="artistic times.html">Home</a>&nbsp;&nbsp;
            <a href="journal.html">Art</a>&nbsp;&nbsp;
            <a href="">Journal</a>&nbsp;&nbsp;
            <a href="">Wellness</a>&nbsp;&nbsp;

    </nav><br><br>
   
        <div class="title">
            <h3 style="font-size:25px;font-family:'annie use your telescope';font-weight:800;"><b>Art</b></h3>
            <h6></h6>

<!--3column layout-->
        </div>
        <section>
        <div class="row">
          
            <div class="column">
             <a href="blog.html"><img src="721c78c33781d4fdb410d31c87928986.jpg" alt="Snow" style="width:85%"></a>
              <P>Watercolour Journey</P>
            </div>
            <div class="column">
              <a href="#"> <img src="strawberry aesthetic illustration.jpeg" alt="Forest" style="width:100%"></a>
              <P> Colour Theory</P>
            </div>
            <div class="column">
             <a href="#"> <img src="0ba49a71549cc72c851dfdbc9e55c44b.jpg" alt="Mountains" style="width:110%"></a>
              <P>Sketchings</P>

            </div>
</div>
          </div><br>

<!--3column layout-->

          <div class="row">
            <div class="column">
              <a href="#"><img src="adf639fa43895b446d486ec712a61e81.jpg" alt="Snow" style="width:94%"></a>
              <P>Handmade Bookmarks</P>
            </div>
            <div class="column">
            
              <img src="July cover page.jpeg" alt="Forest" style="width:100%">
              <P>Bullet journal</P>
            </div>
            <div class="column">
              <img src="45665c809bae0fe16992af173b6b9b06.jpg" alt="Mountains" style="width:99%">
              <P>Painting Diaries</P>
            </div>
          </div>
    </section>
   
            
          <br>

<?php
$name=$email=$comment= "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

         


    <div class="comment-form">
      <h2>Leave us a Comment</h2>
     <form method="post" action="trial.php">
          
          <input type="text" id="name" name="name" value="<?php $name;?>" required placeholder="Name">

          
          <input type="email" id="email" name="email"   value="<?php $email;?>" placeholder="Email"required>

          <label for="comment">Comment:</label>
          <textarea id="comment" name="comment"   value="<?php $comment;?>" rows="5" required></textarea>

          <button type="submit" name="submit" value="submit">Submit </button>
          <?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="success-message">Form submitted successfully!</div>
        <?php endif; ?>
              </form>
  </div><br><br><br>

<div> <img src="printablehead.png" style="width:50%;"></div>

  <div class="image-containers" style="margin-right:auto;margin-left:auto;">
      <div class="image-wrapper">
        <div class="image-container">
        <img  class="img1"src="Fluffnest - Home to the PuffPals.png" alt="Image 1">
           
            <div class="overlay">
            <a href="notepad.jpeg" download><button>Click To download</button></a>
            </div>
        </div>
        <p>Aesthetic Notepads</p>
      </div>
      <div class="image-wrapper">
        <div class="image-container">
            <img  src="stick.jpeg" alt="Image 2">
            
            <div class="overlay">
            <a href="stickers.jpeg" download><button>Click To download</button></a>
          </div>
        </div>
        <p>stickers</p>
      </div>
      <div class="image-wrapper">
        <div class="image-container">
        <img src="Dtiys ✨ countryside vibes.jpeg" alt="Image 3">
            
            <div class="overlay">
            <a href="download (5).jpeg" download><button>Click To download</button></a>
            </div>
            
        </div>
        <p>Desktop Wallpapers</p>
      </div>
        <!-- Add more image wrappers as needed -->
    </div>
    <br>
    <br>
    <p></p>





  <script>
    // JavaScript for form validation (optional)
function validateForm() {
    
    // Add more complex validation if needed (e.g., email format, etc.)
    document.getElementById("success").innerhtml = "Successfully sent";    
}

  </script>
   
    
    </body>
    </html>