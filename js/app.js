var app = angular.module('toDoApp', []);
app
  .controller('ToDoController', ['$scope', '$http', function ($scope, $http) {
	getTask(); // Load all available tasks 
	$scope.edit = false;
	function getTask(){  
		$http.post("ajax/getTask.php").success(function(data){
	      $scope.tasks = data;
	      console.log(data);
	 	});
	};
	$scope.addTask = function (task) {
		console.log("AddEdit::: "+ task);
		if($scope.edit == false){
			$http.post("ajax/addTask.php?task="+task.TASK).success(function(data){
					console.log(data);
			        getTask();
			        $scope.task = '';
			});
		}else{
			$http.post("ajax/editTask.php?task="+task.TASK+ "&taskID="+ task.ID).success(function(data){
					console.log(data);
			        getTask();
			        $scope.task = '';
			});
		}
		$scope.edit = false;
	}
		
	$scope.editTask = function (task) {
		console.log("AddEdit::: "+ task);
		$scope.task = task;
		$scope.edit = true;
	  	// $http.post("ajax/updateTask.php?task="+task).success(function(data){
	   //    getTask();
	   //  });
	}
	$scope.doneTask = function (item) {
		console.log(item);
	    $http.post("ajax/updateTask.php?taskID="+item+"&status=2").success(function(data){
	    	console.log(data);
	        getTask();
	    });
	}
	$scope.unDoneTask = function (item) {
		console.log(item);
	  $http.post("ajax/updateTask.php?taskID="+item+"&status=0").success(function(data){
	        console.log(data);
	        getTask();
	  });
	}
	$scope.deleteTask = function (taskId) {
		console.log(taskId);
	    if(confirm("Are you sure to delete this task?")){
	    $http.post("ajax/deleteTask.php?taskID="+taskId).success(function(data){
	        console.log(data);
	        getTask();
	      });
	    }
	};
  }])