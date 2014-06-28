<?php

class OrderTableSeeder extends Seeder {
    public function run(){

        DB::table('itemorder')->delete();
        DB::table('orders')->delete();

        Order::create(array('id' => '1', 'dataPedido' => date('2014-06-01'),'user_id' => '2','client_id' => '01', 'valor_pedido' => '072'));
        ItemOrder::create(array('order_id' => '1', 'product_id' => '2','quantidade' => '06', 'valor_unitario' => '012', 'status' => '1'));
        
        Order::create(array('id' => '2', 'dataPedido' => date('2014-06-02'),'user_id' => '2','client_id' => '02', 'valor_pedido' => '192'));
        ItemOrder::create(array('order_id' => '2', 'product_id' => '1','quantidade' => '12', 'valor_unitario' => '010', 'status' => '1'));
        ItemOrder::create(array('order_id' => '2', 'product_id' => '2','quantidade' => '06', 'valor_unitario' => '012', 'status' => '1'));

        Order::create(array('id' => '3', 'dataPedido' => date('2014-06-03'),'user_id' => '3','client_id' => '03', 'valor_pedido' => '44'));
        ItemOrder::create(array('order_id' => '3', 'product_id' => '1','quantidade' => '02', 'valor_unitario' => '010', 'status' => '1'));
        ItemOrder::create(array('order_id' => '3', 'product_id' => '2','quantidade' => '02', 'valor_unitario' => '012', 'status' => '1'));
        
        Order::create(array('id' => '4', 'dataPedido' => date('2014-06-04'),'user_id' => '2','client_id' => '04', 'valor_pedido' => '44'));
        ItemOrder::create(array('order_id' => '4', 'product_id' => '1','quantidade' => '02', 'valor_unitario' => '010', 'status' => '1'));
        ItemOrder::create(array('order_id' => '4', 'product_id' => '2','quantidade' => '02', 'valor_unitario' => '012', 'status' => '1'));
        
        Order::create(array('id' => '5', 'dataPedido' => date('2014-06-05'),'user_id' => '2','client_id' => '05', 'valor_pedido' => '22'));
        ItemOrder::create(array('order_id' => '5', 'product_id' => '1','quantidade' => '01', 'valor_unitario' => '010', 'status' => '1'));
        ItemOrder::create(array('order_id' => '5', 'product_id' => '2','quantidade' => '01', 'valor_unitario' => '012', 'status' => '1'));
        
        Order::create(array('id' => '6', 'dataPedido' => date('2014-06-06'),'user_id' => '3','client_id' => '04', 'valor_pedido' => '110'));
        ItemOrder::create(array('order_id' => '6', 'product_id' => '1','quantidade' => '05', 'valor_unitario' => '010', 'status' => '1'));
        ItemOrder::create(array('order_id' => '6', 'product_id' => '2','quantidade' => '05', 'valor_unitario' => '012', 'status' => '1'));

        Order::create(array('id' => '7', 'dataPedido' => date('2014-06-07'),'user_id' => '1','client_id' => '07', 'valor_pedido' => '66'));
        ItemOrder::create(array('order_id' => '7', 'product_id' => '1','quantidade' => '03', 'valor_unitario' => '010', 'status' => '1'));
        ItemOrder::create(array('order_id' => '7', 'product_id' => '2','quantidade' => '03', 'valor_unitario' => '012', 'status' => '1'));

        Order::create(array('id' => '8', 'dataPedido' => date('2014-06-08'),'user_id' => '2','client_id' => '08', 'valor_pedido' => '94'));
        ItemOrder::create(array('order_id' => '8', 'product_id' => '1','quantidade' => '01', 'valor_unitario' => '010', 'status' => '1'));
        ItemOrder::create(array('order_id' => '8', 'product_id' => '2','quantidade' => '07', 'valor_unitario' => '012', 'status' => '1'));

        Order::create(array('id' => '9', 'dataPedido' => date('2014-06-09'),'user_id' => '2','client_id' => '09', 'valor_pedido' => '220'));
        ItemOrder::create(array('order_id' => '9', 'product_id' => '1','quantidade' => '10', 'valor_unitario' => '010', 'status' => '1'));
        ItemOrder::create(array('order_id' => '9', 'product_id' => '2','quantidade' => '10', 'valor_unitario' => '012', 'status' => '1'));

        Order::create(array('id' => '10', 'dataPedido' => date('2014-06-10'),'user_id' => '2','client_id' => '10', 'valor_pedido' => '72'));
        ItemOrder::create(array('order_id' => '10', 'product_id' => '2','quantidade' => '06', 'valor_unitario' => '012', 'status' => '1'));

        Order::create(array('id' => '11', 'dataPedido' => date('2014-06-11'),'user_id' => '2','client_id' => '10', 'valor_pedido' => '60'));
        ItemOrder::create(array('order_id' => '11', 'product_id' => '2','quantidade' => '05', 'valor_unitario' => '012', 'status' => '1'));

        Order::create(array('id' => '12', 'dataPedido' => date('2014-06-12'),'user_id' => '2','client_id' => '17', 'valor_pedido' => '66'));
        ItemOrder::create(array('order_id' => '12', 'product_id' => '1','quantidade' => '03', 'valor_unitario' => '010', 'status' => '1'));
        ItemOrder::create(array('order_id' => '12', 'product_id' => '2','quantidade' => '03', 'valor_unitario' => '012', 'status' => '1'));

        Order::create(array('id' => '13', 'dataPedido' => date('2014-06-13'),'user_id' => '2','client_id' => '12', 'valor_pedido' => '50'));
        ItemOrder::create(array('order_id' => '13', 'product_id' => '1','quantidade' => '05', 'valor_unitario' => '010', 'status' => '0'));

        Order::create(array('id' => '14', 'dataPedido' => date('2014-06-14'),'user_id' => '2','client_id' => '13', 'valor_pedido' => '50'));
        ItemOrder::create(array('order_id' => '14', 'product_id' => '1','quantidade' => '05', 'valor_unitario' => '010', 'status' => '0'));

        Order::create(array('id' => '15', 'dataPedido' => date('2014-06-15'),'user_id' => '2','client_id' => '14', 'valor_pedido' => '220'));
        ItemOrder::create(array('order_id' => '15', 'product_id' => '1','quantidade' => '10', 'valor_unitario' => '010', 'status' => '0'));
        ItemOrder::create(array('order_id' => '15', 'product_id' => '2','quantidade' => '10', 'valor_unitario' => '012', 'status' => '0'));

        Order::create(array('id' => '16', 'dataPedido' => date('2014-06-16'),'user_id' => '2','client_id' => '09', 'valor_pedido' => '110'));
        ItemOrder::create(array('order_id' => '16', 'product_id' => '1','quantidade' => '05', 'valor_unitario' => '010', 'status' => '0'));
        ItemOrder::create(array('order_id' => '16', 'product_id' => '2','quantidade' => '05', 'valor_unitario' => '012', 'status' => '0'));

        Order::create(array('id' => '17', 'dataPedido' => date('2014-06-17'),'user_id' => '1','client_id' => '15', 'valor_pedido' => '360'));
        ItemOrder::create(array('order_id' => '17', 'product_id' => '1','quantidade' => '40', 'valor_unitario' => '009', 'status' => '0'));

        Order::create(array('id' => '18', 'dataPedido' => date('2014-06-18'),'user_id' => '3','client_id' => '16', 'valor_pedido' => '22'));
        ItemOrder::create(array('order_id' => '18', 'product_id' => '1','quantidade' => '01', 'valor_unitario' => '010', 'status' => '0'));
        ItemOrder::create(array('order_id' => '18', 'product_id' => '2','quantidade' => '01', 'valor_unitario' => '012', 'status' => '0'));

        Order::create(array('id' => '19', 'dataPedido' => date('2014-06-19'),'user_id' => '3','client_id' => '18', 'valor_pedido' => '22'));
        ItemOrder::create(array('order_id' => '19', 'product_id' => '1','quantidade' => '01', 'valor_unitario' => '010', 'status' => '0'));
        ItemOrder::create(array('order_id' => '19', 'product_id' => '2','quantidade' => '01', 'valor_unitario' => '012', 'status' => '0'));

        Order::create(array('id' => '20', 'dataPedido' => date('2014-06-20'),'user_id' => '3','client_id' => '19', 'valor_pedido' => '22'));
        ItemOrder::create(array('order_id' => '20', 'product_id' => '1','quantidade' => '01', 'valor_unitario' => '010', 'status' => '0'));
        ItemOrder::create(array('order_id' => '20', 'product_id' => '2','quantidade' => '01', 'valor_unitario' => '012', 'status' => '0'));

        Order::create(array('id' => '21', 'dataPedido' => date('2014-06-21'),'user_id' => '2','client_id' => '20', 'valor_pedido' => '22'));
        ItemOrder::create(array('order_id' => '21', 'product_id' => '1','quantidade' => '01', 'valor_unitario' => '010', 'status' => '0'));
        ItemOrder::create(array('order_id' => '21', 'product_id' => '2','quantidade' => '01', 'valor_unitario' => '012', 'status' => '0'));

        Order::create(array('id' => '22', 'dataPedido' => date('2014-06-22'),'user_id' => '3','client_id' => '21', 'valor_pedido' => '22'));
        ItemOrder::create(array('order_id' => '22', 'product_id' => '1','quantidade' => '01', 'valor_unitario' => '010', 'status' => '0'));
        ItemOrder::create(array('order_id' => '22', 'product_id' => '2','quantidade' => '01', 'valor_unitario' => '012', 'status' => '0'));

        Order::create(array('id' => '23', 'dataPedido' => date('2014-06-23'),'user_id' => '3','client_id' => '22', 'valor_pedido' => '66'));
        ItemOrder::create(array('order_id' => '23', 'product_id' => '1','quantidade' => '03', 'valor_unitario' => '010', 'status' => '0'));
        ItemOrder::create(array('order_id' => '23', 'product_id' => '2','quantidade' => '03', 'valor_unitario' => '012', 'status' => '0'));
    }
}