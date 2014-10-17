function caseList($scope,$http) {
	$http.get("/clients.php").success(function(response) {$scope.cases = response;});
}
