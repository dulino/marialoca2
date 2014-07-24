angular.module('myApp')
    .directive('barraMenus', function() {
        return {
            restrict: "E",
            templateUrl: "partials/menus.html",
            controller: function($scope,$sanitize,$location,Authenticate,Flash){

        $scope.logout = function (){
            Authenticate.logout($scope.loginData)
                .success(function(response) {
                    delete sessionStorage.authenticated
                    Flash.show(response.flash)
                    $location.path('/')
                });
        }
    }
        };
    })
    .controller('loginController',function($scope,$sanitize,$location,Authenticate,Flash){

        $scope.login = function(){
			Authenticate.save($scope.loginData)
				.success(function(data) {
					$location.path('/order')
					Flash.clear()
					sessionStorage.authenticated = true;
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
                    total = parseInt(parseInt(total) + parseInt(order.valor_unitario * order.quantidade));
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
                    total = parseInt(parseInt(total) + parseInt(order.valor_unitario * order.quantidade));
                  }
                })
                return total;
            }
            $scope.clearOrder = function(order) {
                Orders.deletaItemPedido(order.id).success(function() {
                    if (order.product_id == 1) {
                        $scope.ordersOriginal.splice($scope.ordersOriginal.indexOf(order),1);
                    }
                    if (order.product_id == 2) {
                        $scope.ordersTrigo.splice($scope.ordersTrigo.indexOf(order),1);
                    }
                });
            }
            $scope.alteraStatus = function(order) {
                if (order.status == 1) {
                    Orders.alteraStatusItemPedido(order.id, 0).success(function() {
                        if (order.product_id == 1) {
                            $scope.ordersOriginal[$scope.ordersOriginal.indexOf(order)].status = 0;
                        }
                        if (order.product_id == 2) {
                            $scope.ordersTrigo[$scope.ordersTrigo.indexOf(order)].status = 0;
                        }
                    });
                } else {
                    Orders.alteraStatusItemPedido(order.id, 1).success(function() {
                        if (order.product_id == 1) {
                            $scope.ordersOriginal[$scope.ordersOriginal.indexOf(order)].status = 1;
                        }
                        if (order.product_id == 2) {
                            $scope.ordersTrigo[$scope.ordersTrigo.indexOf(order)].status = 1;
                        }
                    });
                }
            }
            $scope.updateQuantidade = function(itemOrder, data) {
                Orders.alteraQuantidadeItemPedido(itemOrder, data)
                .success(function() {
                    console.log('sucesso');
                })
                .error(function() {
                    console.log('erro');
                });
            }
			});
    })
    .controller('clientController',function($scope,$location,$routeParams,Authenticate,Clients,Flash){
        if (!sessionStorage.authenticated){
            $location.path('/')
            Flash.show("Você precisa estar autenticado para acessar essa página")
        }
        Clients.home()
            .success(function(response) {
            $scope.clientes = response.clientes;
            });
    })
    .controller('userController',function($scope,$location,$routeParams,Authenticate,Users,Flash){
        if (!sessionStorage.authenticated){
            $location.path('/')
            Flash.show("Você precisa estar autenticado para acessar essa página")
        }
        Users.home()
            .success(function(response) {
            $scope.usuarios = response.usuarios;
            });
    })
