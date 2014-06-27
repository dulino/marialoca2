angular.module('myApp')
    .controller('loginController',function($scope,$sanitize,$location,Authenticate,Flash){

        $scope.login = function(){
			Authenticate.save($scope.loginData)
				.success(function(data) {
					$location.path('/order')
					Flash.clear()
					sessionStorage.authenticated = true;
				});
        }
        $scope.logout = function (){
			Authenticate.logout($scope.loginData)
				.success(function(response) {
	                delete sessionStorage.authenticated
    	            Flash.show(response.flash)
        	        $location.path('/')
				});
        }
    })
    .controller('orderController',function($scope,$location,$routeParams,Authenticate,Orders,Flash){
        if (!sessionStorage.authenticated){
            $location.path('/')
            Flash.show("Você precisa estar autenticado para acessar essa página")
        }
		Orders.home()
			.success(function(response) {
            $scope.ordersOriginal = response.ordersOriginal;
            $scope.ordersTrigo    = response.ordersTrigo;
            $scope.search  = {status:"0"};

            $scope.getQtdTotalOriginal = function(){
                var total = 0;
                angular.forEach($scope.ordersOriginal, function(order) {
                  if ($scope.search.status == order.status) {
                    total = parseInt(parseInt(total) + parseInt(order.quantidade));
                  }
                })
                return parseInt(total);
            }
            $scope.getValorTotalOriginal = function(){
                var total = 0.0;
                angular.forEach($scope.ordersOriginal, function(order) {
                  if ($scope.search.status == order.status) {
                    total = parseInt(parseInt(total) + parseInt(order.valor_pedido));
                  }
                })
                return total;
            }
            $scope.getQtdTotalTrigo = function(){
                var total = 0;
                angular.forEach($scope.ordersTrigo, function(order) {
                  if ($scope.search.status == order.status) {
                    total = parseInt(parseInt(total) + parseInt(order.quantidade));
                  }
                })
                return parseInt(total);
            }
            $scope.getValorTotalTrigo = function(){
                var total = 0.0;
                angular.forEach($scope.ordersTrigo, function(order) {
                  if ($scope.search.status == order.status) {
                    total = parseInt(parseInt(total) + parseInt(order.valor_pedido));
                  }
                })
                return total;
            }
			});
    })
