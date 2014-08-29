angular.module("myApp",['ngRoute', 'ngResource','ngSanitize', 'ui.bootstrap', 'xeditable'])
    .config(['$routeProvider',function($routeProvider){
        $routeProvider.when('/',{templateUrl:'partials/login.html', controller: 'loginController'})
        $routeProvider.when('/order',{templateUrl:'partials/orders.html', controller: 'orderController'})
        $routeProvider.when('/order/client/:id',{templateUrl:'partials/clientOrders.html', controller: 'clientOrdersController'})
        $routeProvider.when('/client',{templateUrl:'partials/clients.html', controller: 'clientController'})
        $routeProvider.when('/user',{templateUrl:'partials/users.html', controller: 'userController'})
        $routeProvider.otherwise({redirectTo :'/'})
    }]).config(function($httpProvider){

        var interceptor = function($rootScope,$location,$q,Flash){

            var success = function(response){
                return response
            }

            var error = function(response){
                if (response.status = 401){
                    delete sessionStorage.authenticated
                    $location.path('/')
                    Flash.show(response.data.flash)
                }
                return $q.reject(response)
            }
            
            return function(promise){
                return promise.then(success, error)
            }
        }
        $httpProvider.responseInterceptors.push(interceptor)
    }).run(function($http,CSRF_TOKEN){
        $http.defaults.headers.common['csrf_token'] = CSRF_TOKEN;
    }).run(function(editableOptions, editableThemes) {
        editableThemes.bs3.inputClass = 'input-sm';
        editableThemes.bs3.buttonsClass = 'btn-sm';
        editableOptions.theme = 'bs3';
    })
