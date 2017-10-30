<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ToDo App</title>

		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
		body{
		    height: 100vh;
		    background-color: #37cab3;
		}
		.bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
		.link{
			background: #222;
			background: -moz-linear-gradient(#252525, #0A0A0A) ;
			background: -o-linear-gradient(#252525, #0A0A0A);
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#252525 , #0A0A0A);
			background: -webkit-linear-gradient(#252525, #0A0A0A);
			-webkit-box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
			-moz-box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
			box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
			color:#fff;
			padding: 8px 10px;
			text-decoration: none;
			font-weight: normal;
			font-size: 18px;
			font-family: Arial,Verdana;
			word-spacing: 1px;
			border-radius: 4px;
			-webkit-border-radius: 4px;
			-moz-border-radius: 4px;
			-o-border-radius: 4px;
			-ms-border-radius: 4px;
		}
		.link:hover{
			text-decoration: none;
			color: #fff;
			background:#62ABD8 !important;
			background: -moz-linear-gradient(#80BADE, #62ABD8) ;
			background: -o-linear-gradient(#80BADE, #62ABD8);
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#80BADE , #62ABD8));
			background: -webkit-linear-gradient(#80BADE, #62ABD8);
			-webkit-box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
			-moz-box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
			box-shadow: rgba(0, 0, 0, 0.4) 0px 1px 2px;
		}
		.link:active{
			background:#62ABD8 !important;
			background: -moz-linear-gradient(#80BADE, #62ABD8) ;
			background: -o-linear-gradient(#80BADE, #62ABD8);
			background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#80BADE , #62ABD8));
			background: -webkit-linear-gradient(#80BADE, #62ABD8);
			-webkit-box-shadow: inset rgba(0, 0, 0, 0.4) 0px 1px 2px;
			-moz-box-shadow: inset rgba(0, 0, 0, 0.4) 0px 1px 2px;
			box-shadow: inset rgba(0, 0, 0, 0.4) 0px 1px 2px;
		}
		</style>
	</head>
<body ng-app="toDoApp">
<div style="width:100%;text-align:center;margin:0 auto;">
	<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <div id="logo-wrapper">
      <div class="logo">
        <a href="/" title="#"><img src="http://assetquiz.eckovation.com/t3.jpg" alt="logo" " height= 50px "/>
         <b> ToDO App<b></a>
      </div>
    </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">About</a></li>
        <li><a href="#">Get The App</a></li>
        <li><a href="#">For Teachers</a></li>
        <li><a href="#">For Parents</a></li>
      </ul>
    </div>
  </div>
</nav>
	
</div>
	<div class="container" ng-controller="ToDoController">
		<div class="col-xs-12 col-sm-12 col-md-offset-3 col-md-5 col-lg-offset-3 col-lg-5">
			<h2>ToDo App</h2>
			<div class="form">
				<div class="input-group">
					<input type="text" class="form-control" ng-model="task.TASK">
					<span class="input-group-btn">
						<button class="btn btn-default" type="button" ng-click="addTask(task)"><span
							class="glyphicon glyphicon-plus"></span> Add Task</button>
					</span>
				</div>
			</div>
			<hr/>
			
			<ul class="list-group" ng-show="tasks.length > 0">
				<li class="list-group-item clearfix task" ng-repeat="todo in tasks" ng-class="{disabled: todo.STATUS==2}"> 
					<p class="lead">{{todo.TASK}}</p>
					<div>
						<span class="pull-right">
							<button class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil" 
								ng-click="editTask(todo)"></span></button>
							<button class="btn btn-primary btn-xs" ng-show="todo.STATUS==0"><span class="glyphicon glyphicon-ok" 
								ng-click="doneTask(todo.ID)"></span></button>
							<button class="btn btn-primary btn-xs" ng-show="todo.STATUS==2"><span class="glyphicon glyphicon-repeat" 
								ng-click="unDoneTask(todo.ID)"></span></button>
							<button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" 
								ng-click="deleteTask(todo.ID)"></span></button>
						</span>
					</div>
				</li>
			</ul>
			
		</div>
	</div>
	<br/>
	
	<div class="container-fluid bg-2 text-center">
  <h3 class="margin">What To Do ?</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  <a href="#" class="btn btn-default btn-lg">
    <span class="glyphicon glyphicon-search"></span> Search
  </a>
</div>

<br><br>
<footer class="container-fluid bg-4 text-center">
<div class="row">
    <div class="col-sm-4">
      <h5>Social Networking</h5>
<ul><li class="footer_twitter"><a href="http://twitter.com/#!/ToDo/" target="_blank">Twitter</a></li>
<li class="footer_facebook"><a href="http://www.facebook.com/#" target="_blank">Facebook</a></li>
<li class="footer_youtube"><a href="http://www.youtube.com/user/#" target="_blank">YouTube</a></li>
</ul>
       </div>
    <div class="col-sm-4"> 
      <h5>Learn More</h5>
<ul><li><a href="/for-librarians">For Students</a></li>
<li><a href="/for-teachers">For Teachers</a></li>
<li><a href="/for-parents">For Parents</a></li>
</ul>
      </div>
    <div class="col-sm-4"> 
      <h5>ToDo</h5>
<ul><li><span class="footer-gettheapp" style="color:#FF1E60"><a href="get-the-app">Get the App</a></span></li>
<li><a href="/about">About</a></li>
<li><a href="#">Contact</a></li>
</ul>
       </div>
  </div>
</div>
  <p>Theme Made By <a href="#"> aashish singh </a></p> 
</footer>

	<script src="js/angular.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>