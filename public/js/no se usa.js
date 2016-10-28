'use strict';

var app = angular.module('flex',['ngRoute']);
	app.config(function($routeProvider){
		$routeProvider.
		when('/users',{template:'partials/show-user.html',controller:'sUserCtrl'}).
		when('/register',{template:'partials/registro-usuarios.html', controller:'registerCtrl'}).
		otherwise({redirectTo:'/home', template:'partials/home.html', controller:'homeCtrl'})
	});
	.controller('sUserCtrl'.['scope',function($scope)]){
		$scope.title = 'pagina de usuarios';
		$scope.body = 'documento de usuarios';
	}
	.controller('registerCtrl'.['scope',function($scope)]){
		$scope.title = 'pagina de registro';
		$scope.body = 'documento de registro';
	}
	.controller('homeCtrl'.['scope',function($scope)]){
		$scope.title = 'pagina de home';
		$scope.body = 'documento de home';
	}
function MainCtrl($scope,$location){
	$scope.setRoute = function(route){
		$location.path(route);
	}
}();