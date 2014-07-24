angular.module('myApp')
    .factory('Authenticate', function($http){
        return {
        	save : function(loginData) {
				return $http({
					method: 'POST',
					url: '/autenticacao/login',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(loginData)
				});
        	},
        	logout : function() {
				return $http({
					method: 'GET',
					url: '/autenticacao/logout'
				});
        	}
        }
    })
    .factory('Orders', function($http){
        return { 
            home : function() {	
                return $http({method: 'GET',url: '/orders/home'});	
            },
            deletaItemPedido : function(id) {
                return $http({
                    method: 'GET',
                    url: '/orders/'+id+'/deletaItemPedido/',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
                });
            },
            alteraStatusItemPedido : function(id, status) {
                return $http({
                    method: 'GET',
                    url: '/orders/'+id+'/alteraStatusItemPedido/'+status,
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
                });
            },
            alteraQuantidadeItemPedido : function(itemOrder, data) {
                return $http({
                    method: 'GET',
                    url: '/orders/'+itemOrder.id+'/alteraQuantidadeItemPedido/'+data,
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' }
                });
            }
        }
    })
    .factory('Clients', function($http){
        return { 
            home : function() { 
                return $http({method: 'GET',url: '/clients/home'});  
            }
        }
    })
    .factory('Users', function($http){
        return { 
            home : function() { 
                return $http({method: 'GET',url: '/users/home'});  
            }
        }
    })
    .factory('Flash', function($rootScope){
        return {
            show: function(message){
                $rootScope.flash = message
            },
            clear: function(){
                $rootScope.flash = ""
            }
        }
    })