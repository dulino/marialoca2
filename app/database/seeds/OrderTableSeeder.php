<?php

class OrderTableSeeder extends Seeder {
    public function run(){
        DB::table('orders')->delete();

        Order::create(array('dataPedido' => date('2014-06-01'),'user_id' => '2','client_id' => '01','product_id' => '2','quantidade' => '06', 'valor_pedido' => '072',  'status' => '1'));
        
        Order::create(array('dataPedido' => date('2014-06-02'),'user_id' => '2','client_id' => '02','product_id' => '1','quantidade' => '12', 'valor_pedido' => '120',  'status' => '1'));
        Order::create(array('dataPedido' => date('2014-06-02'),'user_id' => '2','client_id' => '02','product_id' => '2','quantidade' => '06', 'valor_pedido' => '072',  'status' => '1'));
        
        Order::create(array('dataPedido' => date('2014-06-03'),'user_id' => '3','client_id' => '03','product_id' => '1','quantidade' => '02', 'valor_pedido' => '020',  'status' => '1'));
        Order::create(array('dataPedido' => date('2014-06-03'),'user_id' => '3','client_id' => '03','product_id' => '2','quantidade' => '02', 'valor_pedido' => '024',  'status' => '1'));
        
        Order::create(array('dataPedido' => date('2014-06-04'),'user_id' => '2','client_id' => '04','product_id' => '1','quantidade' => '02', 'valor_pedido' => '020',  'status' => '1'));
        Order::create(array('dataPedido' => date('2014-06-04'),'user_id' => '2','client_id' => '04','product_id' => '2','quantidade' => '02', 'valor_pedido' => '024',  'status' => '1'));
        
        Order::create(array('dataPedido' => date('2014-06-05'),'user_id' => '2','client_id' => '05','product_id' => '1','quantidade' => '01', 'valor_pedido' => '010',  'status' => '1'));
        Order::create(array('dataPedido' => date('2014-06-05'),'user_id' => '2','client_id' => '05','product_id' => '2','quantidade' => '01', 'valor_pedido' => '012',  'status' => '1'));
        
        Order::create(array('dataPedido' => date('2014-06-06'),'user_id' => '3','client_id' => '06','product_id' => '1','quantidade' => '05', 'valor_pedido' => '050',  'status' => '1'));
        Order::create(array('dataPedido' => date('2014-06-06'),'user_id' => '3','client_id' => '06','product_id' => '2','quantidade' => '05', 'valor_pedido' => '060',  'status' => '1'));

        Order::create(array('dataPedido' => date('2014-06-07'),'user_id' => '1','client_id' => '07','product_id' => '1','quantidade' => '03', 'valor_pedido' => '030',  'status' => '1'));
        Order::create(array('dataPedido' => date('2014-06-07'),'user_id' => '1','client_id' => '07','product_id' => '2','quantidade' => '03', 'valor_pedido' => '036',  'status' => '1'));

        Order::create(array('dataPedido' => date('2014-06-08'),'user_id' => '2','client_id' => '08','product_id' => '1','quantidade' => '01', 'valor_pedido' => '010',  'status' => '1'));
        Order::create(array('dataPedido' => date('2014-06-08'),'user_id' => '2','client_id' => '08','product_id' => '2','quantidade' => '07', 'valor_pedido' => '084',  'status' => '1'));

        Order::create(array('dataPedido' => date('2014-06-09'),'user_id' => '2','client_id' => '09','product_id' => '1','quantidade' => '10', 'valor_pedido' => '100',  'status' => '1'));
        Order::create(array('dataPedido' => date('2014-06-09'),'user_id' => '2','client_id' => '09','product_id' => '2','quantidade' => '10', 'valor_pedido' => '120',  'status' => '1'));

        Order::create(array('dataPedido' => date('2014-06-10'),'user_id' => '2','client_id' => '10','product_id' => '2','quantidade' => '06', 'valor_pedido' => '72',  'status' => '1'));
        Order::create(array('dataPedido' => date('2014-06-11'),'user_id' => '2','client_id' => '11','product_id' => '2','quantidade' => '05', 'valor_pedido' => '60',  'status' => '1'));

        Order::create(array('dataPedido' => date('2014-06-12'),'user_id' => '2','client_id' => '17','product_id' => '1','quantidade' => '03', 'valor_pedido' => '030',  'status' => '1'));
        Order::create(array('dataPedido' => date('2014-06-13'),'user_id' => '2','client_id' => '17','product_id' => '2','quantidade' => '03', 'valor_pedido' => '036',  'status' => '1'));

        Order::create(array('dataPedido' => date('2014-06-14'),'user_id' => '2','client_id' => '12','product_id' => '1','quantidade' => '05', 'valor_pedido' => '050',  'status' => '0'));
        Order::create(array('dataPedido' => date('2014-06-15'),'user_id' => '2','client_id' => '13','product_id' => '1','quantidade' => '05', 'valor_pedido' => '050',  'status' => '0'));

        Order::create(array('dataPedido' => date('2014-06-16'),'user_id' => '2','client_id' => '14','product_id' => '1','quantidade' => '10', 'valor_pedido' => '100',  'status' => '0'));
        Order::create(array('dataPedido' => date('2014-06-16'),'user_id' => '2','client_id' => '14','product_id' => '2','quantidade' => '10', 'valor_pedido' => '120',  'status' => '0'));

        Order::create(array('dataPedido' => date('2014-06-17'),'user_id' => '2','client_id' => '09','product_id' => '1','quantidade' => '05', 'valor_pedido' => '050',  'status' => '0'));
        Order::create(array('dataPedido' => date('2014-06-17'),'user_id' => '2','client_id' => '09','product_id' => '2','quantidade' => '05', 'valor_pedido' => '060',  'status' => '0'));

        Order::create(array('dataPedido' => date('2014-06-18'),'user_id' => '1','client_id' => '15','product_id' => '1','quantidade' => '40', 'valor_pedido' => '360',  'status' => '0'));

        Order::create(array('dataPedido' => date('2014-06-19'),'user_id' => '3','client_id' => '16','product_id' => '1','quantidade' => '01', 'valor_pedido' => '010',  'status' => '0'));
        Order::create(array('dataPedido' => date('2014-06-19'),'user_id' => '3','client_id' => '16','product_id' => '2','quantidade' => '01', 'valor_pedido' => '012',  'status' => '0'));

        Order::create(array('dataPedido' => date('2014-06-20'),'user_id' => '3','client_id' => '18','product_id' => '1','quantidade' => '01', 'valor_pedido' => '010',  'status' => '0'));
        Order::create(array('dataPedido' => date('2014-06-20'),'user_id' => '3','client_id' => '18','product_id' => '2','quantidade' => '01', 'valor_pedido' => '012',  'status' => '0'));

        Order::create(array('dataPedido' => date('2014-06-21'),'user_id' => '3','client_id' => '19','product_id' => '1','quantidade' => '01', 'valor_pedido' => '010',  'status' => '0'));
        Order::create(array('dataPedido' => date('2014-06-21'),'user_id' => '3','client_id' => '19','product_id' => '2','quantidade' => '01', 'valor_pedido' => '012',  'status' => '0'));

        Order::create(array('dataPedido' => date('2014-06-22'),'user_id' => '2','client_id' => '20','product_id' => '1','quantidade' => '01', 'valor_pedido' => '010',  'status' => '0'));
        Order::create(array('dataPedido' => date('2014-06-22'),'user_id' => '2','client_id' => '20','product_id' => '2','quantidade' => '01', 'valor_pedido' => '012',  'status' => '0'));

        Order::create(array('dataPedido' => date('2014-06-23'),'user_id' => '3','client_id' => '21','product_id' => '1','quantidade' => '01', 'valor_pedido' => '010',  'status' => '0'));
        Order::create(array('dataPedido' => date('2014-06-23'),'user_id' => '3','client_id' => '21','product_id' => '2','quantidade' => '01', 'valor_pedido' => '012',  'status' => '0'));

        Order::create(array('dataPedido' => date('2014-06-24'),'user_id' => '3','client_id' => '22','product_id' => '1','quantidade' => '03', 'valor_pedido' => '030',  'status' => '0'));
        Order::create(array('dataPedido' => date('2014-06-24'),'user_id' => '3','client_id' => '22','product_id' => '2','quantidade' => '03', 'valor_pedido' => '036',  'status' => '0'));
    }
}