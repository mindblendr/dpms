app.controller('loginController', function ($rootScope, $scope, $http, $cookies) {
	$scope.check = 0;
	$scope.click = () => {
		alert('test');
		$scope.check++;
		console.log($scope.check);
	}
});