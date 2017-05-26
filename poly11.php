<?php //include('login.php'); ?>
<!doctype html>
<html><head>
  <title>home</title>
  <meta name="viewport" 
  content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
  <script src="components/webcomponentsjs/webcomponents.js">
  </script><script src="loginvalid.js"> </script>  
   <link rel="import" href="components/polymer/polymer.html">
 
  
    <link rel="import" href="elements1.html"> 
<script src="components/webcomponentsjs/webcomponents.js"></script>

<link rel="import" href="elements1.html"> 


    <script language="javascript">
  var x=1;var y=1;
  function hiddenn(){

	  var elem1 = document.getElementById('po1');
	  elem1.style.height="0px";
	  }
  function hide1(){
  if (y==1) 
  {
  var elem1 = document.getElementById('po1');
	elem1.style.transition = "height 0.7s linear 0s";
	elem1.style.height="200px";
	y=0;
  }
  else{
  	var elem1 = document.getElementById('po1');
	elem1.style.transition = "height 0.7s linear 0s";
	elem1.style.height="0px";
	y=1;
  }
  }
  </script>
 
  
  <style>
  html,body {
    height: 100%;
    margin: 0;
    background-color: #fff;
    font-family: 'RobotoDraft', sans-serif;
  }
   * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -ms-box-sizing: border-box;
        box-sizing: border-box;
      }
 .cont {width: 100%;margin-top:0px;}
 .content2 {
	  margin-top:70px;
	float:left;
      height: 350px;
	  width:100%;
      background: linear-gradient(rgb(235, 237, 231), grey);
    }
	.content2 .sub{
		float:left;
		margin-left:50px;
		padding:25px;
		width:220px;
		height:200px;
		}
	.content2 .bottom{
		text-align:center;
		margin-bottom:0px;
		background-color:#000;
		color:#FFF;
		width:100%;
		margin-top:300px;
		padding-top:2px;
		height:30px;
		font-size:10px;
	}
	
	.content3{	
      height: 400px;
	  width:100%;
	  display:block;
	}.content4{
		margin:60px 0px 0px 0px;	
      height: 500px;
	  width:100%;
	  display:block;
	  background-color:#333;
	  color:#fff;
	}

  .pic{width:100%;background-color:#fff;margin-left:20px;margin-right:20px;margin-top:100px;}
	.picup{width:96%;background-color:rgba(31,36,39,0.5);position:absolute;margin-left:25px;
	margin-right:20px;height:465px;top:110px;z-index:3;}
	.picup1{width:96%;background-color:rgba(31,36,39,0.5);margin-left:25px;;margin-top:10px;
	margin-right:20px;height:600px;z-index:3;}
core-toolbar{height:100px;width:100%;position:fixed;background-color:rgba(16,82,75,0.85);color:white;margin-top:0px;   z-index: 5;}
  paper-icon-button:hover, paper-button:hover{box-shadow: 0 6px 30px 0 rgba(0, 0, 0, 2.0);
  border-radius:19px;}
  a{color:black;text-decoration:none;}
  .head{margin:100px 250px 60px 550px;}
  .in{font-size:23px;margin:100px 200px 0px 200px;}
   .in1{font-size:33px;text-align:center;
  font-weight:800;margin-bottom:50px;padding-top:50px;;}
   .in2{font-size:23px;text-align:center;
  font-weight:400;margin-bottom:50px;margin-top:70px;}
  .icon{float:right;}
  .ser{height:280px;}
  .sertab{margin-left:420px;margin-top:100px;}
  #des{background-color:#fff;
height:40px;font-size:13px;border:#603 thick solid;}
#des1{background-color:#fff;
height:40px;font-size:16px;color:#000;margin-left:550px;width:300px;}
#des:hover,#des1:hover{box-shadow: 0 6px 30px 0 rgba(0, 0, 0, 1.0);font-size:15px;width:350px;background-color:#000;color:#fff;border:none;}
#des1:hover{margin-left:530px;}
  .bet{height:120px;padding-top:110px;}
  hr{width:80px;background-color:#033;height:10px;margin-left:600px;}
  .picholder{}
form{margin-left:200px;}
input[type="text"],[type=number]{height:40px;float:left;width:300px;}  
input[type="Submit"]{height:40px;margin-left:20px;background-color:#fff;
height:40px;font-size:15px;border:#603 thick solid;}
input[type="Submit"]:hover,a:hover{box-shadow: 0 6px 30px 0 rgba(0, 0, 0, 1.0);width:100px;background-color:#603;color:#fff;border:none;}
.head1{margin-top:50px;background-color:#fff;width:100%;text-align:center;height:70px;}
.picc img{margin-left:25px;margin-top:25px;}
.picc{margin:25px 5px 25px 60px;60px;width: 150px;background-color:#fff;
height: 150px;float:left;border-radius:120px;box-shadow: 0 6px 30px 0 rgba(0, 0, 0,1.0);}
.more{float:left;}
.bottom1{padding-top:390px;width:100%;box-shadow: 0 6px 30px 0 rgba(0, 0, 0, 1.0)}
 .head3{margin:50px 250px 60px 550px;}

.abc1  {
float: left;
margin-left:1135px;
margin-top:110px;
padding: 0px;
width: 200px;
height: 200px;
position:fixed;
display:block;
box-shadow: 0 6px 30px 0 rgba(0, 0, 0, 1.0);
overflow: hidden;
background-color:#fff;	
z-index:10;
}

.abc1 a {
height: 220px;
}
#two{color:white;height:50px;} #two:hover{width:220px;font-size:20px;box-shadow: 0 6px 30px 0 rgba(0, 0, 0, 1.0);background-color:rgba(16,82,75,0.85);color:#fff;height:50px;}
#frmlog{margin-left:0px;width:550px;margin-bottom:10px;height:230px;}
#frmlog1{padding-top:30px;padding-bottom:30px;width:540px;margin-bottom:10px;height:230px;margin-left:10px;}
#frmlog1 input{width:200px;display:block;padding:20px 10px 20px 10px;margin:20px 10px 20px 10px;float:left;}
#frmlog1 label{width:200px;display:block;padding:20px 10px 20px 10px;margin:20px 10px 20px 10px;float:left;}
#frmlog input{width:200px;display:block;padding:10px;margin:10px;float:left;}
#frmlog label{width:200px;display:block;padding:10px;margin:10px;float:left;}
#one{height:40px;background-color:#fff;font-size:15;
height:40px;font-size:15px;border:#603 thick solid;margin:10px 0px 0px 15px;padding-left:15px;width:200px;}
#one:hover{box-shadow: 0 6px 30px 0 rgba(0, 0, 0, 1.0);width:230px;background-color:#603;color:#fff;border:none;}

#mar{margin-left:60px;}
#mar a{color:#fff;}
#mar1{margin-left:640px;}
#mar1 a{color:#F90;}
#mar2 a{color:#F90;;}
</style>

</head>

<body onload="hiddenn();">

<core-toolbar>
<paper-icon-button class="bottom indent" icon="menu"></paper-icon-button>
<div id="mar">
<a href="poly11.php"><paper-icon-button class="top indent" icon="home"></paper-icon-button></a></div>
<span class="bottom indent" flex></span>

<div class="bottom indent" id="mar1">
<a href="index2.php"><paper-icon-button icon="social:person-add"></paper-icon-button></a>
<a href="index1.php"><paper-icon-button icon="social:person"></paper-icon-button></a>
</div>



<div class="bottom indent" id="mar2">
<a href="cindex2.php"><paper-icon-button icon="social:group-add"></paper-icon-button></a>
<a href="cindex1.php"><paper-icon-button icon="social:people"></paper-icon-button></a></div>
</div>

<span class="bottom indent" flex></span>
<span class="top indent" flex></span>
<div  class="top indent">Job Seekers</div>
<div  class="top indent">Employers</div>
<div class="top indent">JobSearch.com</div>
<paper-icon-button class="bottom indent" icon="more-vert" onclick="hide1();"></paper-icon-button>
</core-toolbar>


  <div class="abc1" id="po1" layout vertical>
    <paper-button raised><a href="ucomments.php">View Feedbacks</a></paper-button>
    <paper-button raised><a href="uplacement.php">Placement Records</a></paper-button>
    <paper-button raised><a href='uqpaper.php'>Placement Papers</a></paper-button>
     <paper-button raised><a href='index3.php'>Admin</a></paper-button>
    </div>
<div class="cont" layout vertical>

<div class="picholder">
<div class="pic"><img src="home_bg.jpg" width="97%"></div>
<div class="picup">
<div class="in"><pre>
Submit your resume...

	      We will Get You Jobs...</pre></div>
       
</div>
</div>

<div class="bet"><hr></div>

<div class="ser">
<div class="head">
<h1>Search For Jobs</h1><br/>Find Jobs By Keyword And Location</div>
<div>
<form action="pjob_view1.php" method="post">
<input type="text" name="s11" placeholder="Skills" required>
<input type="text" name="loc"  placeholder="Location"/>
<input type="number" name="sear"  placeholder="Salary"/>
<input type="submit" value="submit"/></form></div>

<div class="sertab">
<paper-button id="des" raised><a href='pjobloc.php'>Search jobs By Location</a></paper-button>
<paper-button id="des" raised><a href='pjobcomp.php'>Search jobs By Company</a></paper-button>

</div>
</div>
<div class="bet"><hr></div>

<div class="content4">


<div class="in1">
<pre>We bring You the Best Jobs...

That Matches Your 
        
 Needs...</pre>
</div> 
<div class="in2"><pre>Join Us . Complete Your Resumes . Get Job Alerts Right In Your Inbox</pre></div>


<template is="auto-binding">

  <section on-tap="{{toggleDialog1}}">

<button id="des1" raised> Join Us</button>
<paper-action-dialog backdrop autoCloseDisabled layered="false">   

 <h1>User Registration</h1>
 
 <p> Please give the details for easy registration</p>
 <div id="reg"> 
 <form id="frmlog" `name="registration" action="insignup.php" method="post" onSubmit="return formvalid();">
 	<label>USERNAME</label>
  <input type="text" name="n" />
  <label>EMAIL ID</label> 
    <input type="email" name="em">
 	
 	<label> 	  PASSWORD</label> 
      <input type="password" name="p" >
 	  <input type="submit">
</form>
 
<button id="one"> Login </button>
<paper-action-dialog backdrop autoCloseDisabled layered="false">
<h1>Login with your username and password</h1>
<div class="h"></div>
<div id="login">
<form id="frmlog1" name="login" action="" method="post" onSubmit="return formvalid();">
<label>Email :</label><br/>
<input id="email" name="email" placeholder="abcd@gmail.com" type="email">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login "></form>

<a href='pfind_ur_acc.php'>Forgot Password??</a></div> 

<paper-button affirmative autofocus>Tap me to close</paper-button>
</paper-action-dialog>  	 
</div>

      <paper-button affirmative autofocus>Tap me to close</paper-button>
    </paper-action-dialog>
<script>
  var scope = document.querySelector('template[is=auto-binding]');
  scope.toggleDialog1 = function(e) {
    if (e.target.localName != 'button') {
      return;
    }
    var d = e.target.nextElementSibling;
    if (!d) {
      return;
    }
    d.toggle();
  };
</script>
</section>
</template>


</div>

<div class="bet"><hr></div>

<div class="content3">

<div>
<center><h1>Companies With Us</h1></center>
<div class="picc"><img src="dell.png" height="100" width="100"/></div>
<div class="picc"><img src="ibm.png" height="100" width="100"/></div>
<div class="picc"><img src="kotak.jpg" height="100" width="100"/></div>
<div class="picc"><img src="amazon.jpg" height="100" width="100"/></div>
<div class="picc"><img src="fede.jpg" height="100" width="100"/></div>
<div class="picc"><img src="cogni.jpg" height="100" width="100"/></div>
<div class="picc"><img src="citi.jpg" height="100" width="100"/></div>
<div class="picc"><img src="aricent.jpg" height="100" width="100"/></div>
<div class="picc"><img src="infosys.jpg" height="100" width="100"/></div>
<div class="picc"><img src="lg.jpg" height="100" width="100"/></div>
<div class="picc"><img src="accent.jpg" height="100" width="100"/></div>
<div class="picc"><img src="wipro.jpg" height="100" width="100"/></div>
</div>
<div class="bottom1"><a href="compattached.php">MORE..</a></div>
</div>


<div class="bet"><hr></div>

<div class="content2">
    
    <div class="sub">
    <h1>JOB SEEKERS</h1>
    <ul>
    <li><a href='poly1.php'>Home</a></li>
 	<li>Search Jobs</li>
    </ul>
    </div>
    
    <div class="sub">
    <h1>EMPLOYERS</h1>
    <ul >
    <li>Post jobs</li>
	<li>Search candidates</li>
    </ul>
    </div>
    
    
    <div class="sub">
    <h1>BROWSE JOBS</h1>
    <ul >
    <li>Browse all jobs</li>
    <li><a href='pjobcomp.php'>Jobs by Company</a></li>
    <li><a href='pjobloc.php'>Jobs by Location</a></li>
   
    
    </ul>
    </div>
    
    
    <div class="sub">
    <h1>ABOUT US </h1>
    <ul >
  
    
    <li><a href='ucomments.php'>Feedbacks</a></li>
   
    <li><a href='uplacement.php'>Placement Statistics</a></li>
     <li><a href='uqpaper.php'>Previous Q Papers</a></li>
    </ul>
    </div>
    
    <div class="bottom">
    <p> Copyright &copy; Sam & Mad | Website designed by .......</p>
    </div>
    </div>
</div>
 


  
</body>

</html>