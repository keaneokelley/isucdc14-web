function lawyerList($scope,$http) {
<<<<<<< HEAD
	$http.get("/lawyers.php").success(function(response) {$scope.lawyers = response;});
=======
	$http.get("/lawyers.php?query=SELECT * FROM lawyers").success(function(response) {$scope.lawyers = response;});
>>>>>>> 75c9c2037bf74290ceb5a8fc3d43c586e7f56dfd
}
