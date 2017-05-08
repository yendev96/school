var app = angular.module("myApp", []).constant('API', 'http://localhost:8888/school/backend/');;

app.config(function ($interpolateProvider) {
	$interpolateProvider.startSymbol('//');
	$interpolateProvider.endSymbol('//');
});
