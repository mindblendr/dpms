window.app = angular.module('main_app', ['ngCookies'],
	function ($rootScopeProvider, $interpolateProvider) {
		$rootScopeProvider.digestTtl(11); // 11 being the limit of iterations. 
		$interpolateProvider.startSymbol('<%');
		$interpolateProvider.endSymbol('%>');
	}
)

	.config(['$cookiesProvider', function ($cookiesProvider) {
		// Set $cookies defaults
		$cookiesProvider.defaults.path = '/';
		$cookiesProvider.defaults.expires = moment(new Date()).add(1, 'days').toDate();
	}])