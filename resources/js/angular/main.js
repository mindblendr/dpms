app.controller('mainController', function ($rootScope, $scope, $http, $cookies) {
	// Global Variables
	$rootScope.is_logged = false;
	$rootScope.is_loading = true;
	$rootScope.data_loading = {};

	$rootScope.$watchCollection('data_loading', function () {
		let is_still_loading = false;
		Object.entries($rootScope.data_loading).forEach((value, index) => {
			if (value) {
				is_still_loading = true;
			}
		});

		$rootScope.is_loading = is_still_loading;
	});

	$rootScope.changeLoggedIn = () => {
		$rootScope.is_logged = !$rootScope.is_logged;
	}
});