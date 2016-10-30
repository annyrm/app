var svc = angular.module('myApp.services', ['ngResource']);


svc.factory('PhpService', ['$resource', function ($resource) {

        return $resource('', null, {
            enviar: {
                method: 'POST',
                url: 'insert.php',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            },
            obtener: {
                method: 'GET',
                url: 'select.php'
            }
        });
    }
]);