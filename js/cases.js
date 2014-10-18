function caseList($scope,$http) {
<<<<<<< HEAD
	$http.get("/clients.php").success(function(response) {$scope.cases = response;});
=======
	$http.get("/clients.php?query=SELECT * FROM candc").success(function(response) {$scope.cases = response;});
>>>>>>> 75c9c2037bf74290ceb5a8fc3d43c586e7f56dfd
}
