<!DOCTYPE html>
<html>
<head>
<title>Metro Managment system</title>
<style>
div.main{ 
border-style: solid;
margin:150px 160px 20px 160px;
padding:20px 60px 20px 60px;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}
.cancelbtn,.signupbtn {float:left;width:50%}
.container {
    padding: 16px;
}


.modal {
    display: none; 
    position: fixed;
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; 
}


.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}


.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="Container">
	<div id="headingmain">
	<h1>Metro Managment System</h1></div>
  <div id="header_"> 
    <ul class="navi">
      <li><a href="/dbms/index.html">Home Page</a></li>
      <li><a href="/dbms/passnew.html">Passenger login</a></li>
      <li><a href="/dbms/slin.php">Staff Login</a></li>
      <li><a href="#">Photos Gallery</a></li>
      <li><a href="#">Latest Events</a></li>
    </ul>
	</div>
  <form class="modal-content animate" action="salmod.php" method="post">
    <div class="container">
	  <label><b>Staff ID</b></label>
      <input type="text" placeholder="Staff ID" name="sid" required>
	  <label><b>Upgraded Salary</b></label>
      <input type="text" placeholder="Enter the salary" name="sal" required>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Update the salary</button>
      </div>
    </div>
  </form>
</div>
</div>
