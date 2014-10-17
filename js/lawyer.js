function lawyerList($scope,$http) {
	$http.get("/lawyers.php").success(function(response) {$scope.lawyers = response;});
}
