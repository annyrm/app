var routerApp = angular.module('routerApp',['ui.router']);

routerApp.config(function($stateProvider, $urlRouterProvider){
	$urlRouterProvider.otherwise("/");
	$stateProvider
	.state('home',{
		url: '/',
		templateUrl: 'partials/home.html',
	})
	.state('users',{
		url: '/users',
		templateUrl: 'partials/show-users.html',
	})
    .state('register', {
      	url: '/register',
      	templateUrl: 'partials/registro-usuarios.html'
    });
});