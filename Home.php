<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    text-align: center;
    background: white;
}

.header h1 {
    font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    height: 100%;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .topnav a {
        float: none;
        width: 100%;
    }
}
</style>
</head>
<body>

<div class="header">
  <h1>Property Portal</h1>
</div>

<div class="topnav">
  <a href="Home.php">Home</a>
  <a href="register1.php">Register</a>
  <a href="index2.php">Buy</a>
  <a href="insert.php">Sell</a>
  <a href="contact-view.php">Contact Us</a>
  <a href="AboutUs.php">About Us</a>
  <a href="index.php" style="float:right">Login</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Best Site for Buying Newest and Underconstruction Property</h2>
      <h5>High end homes for people</h5>
      <div class="fakeimg" style="height:1000px;width:1000px;">
        <img src="http://localhost/dashboard/web/Images/Home1.jpg" width="1000" height="1000" />
      </div>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;width:100px">
        <img src="http://localhost/dashboard/web/Images/Saurav.jpg" height="100" width="100">
      </div>
      <br>
      <p>I am Saurav Chamoli and I am the Author of the Website</p>
    </div>
    <div class="card">
      <h3>Popular Reviews</h3>
      <div class="fakeimg"><p>The property they sold was very good and according to the picture</p></div>
      <div class="fakeimg"><p>Very good and true</p></div>
      <div class="fakeimg"><p>This is the best property site </p></div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>on these</p>
      <input type="image" src="http://localhost/dashboard/web/Images/Facebook.png" name="Facebook" class="btTxt submit" id="saveForm" width="100" height="100" url="https://www.facebook.com/
" />
<input type="image" src="http://localhost/dashboard/web/Images/Twitter.jpg" name="Twitter" class="btTxt submit" id="saveForm" width="100" height="100" url="https://www.facebook.com/
" />
<input type="image" src="http://localhost/dashboard/web/Images/Instagram.png" name="Instagram" class="btTxt submit" id="saveForm" width="100" height="100" url="https://www.facebook.com/
" />
<input type="image" src="http://localhost/dashboard/web/Images/Googleplus.png" name="Google+" class="btTxt submit" id="saveForm" width="100" height="100" url="https://www.facebook.com/
" />
<input type="image" src="http://localhost/dashboard/web/Images/Youtube.jpg" name="Youtube" class="btTxt submit" id="saveForm" width="100" height="100" url="https://www.facebook.com/
" />
    </div>
  </div>
</div>

<div class="footer">
  <h2>Copyright © 2019-Property Portal Saurav Inc All rights reserved</h2>
</div>

</body>
</html>
