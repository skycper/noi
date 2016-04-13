<?php

namespace App\Repositories;

use App\Order;

class OrderRepository
{
    
    public function getAllOrders()
    {
        return Order::all();
    }

    public function getAllOrdersCount()
    {
        return $this->getAllOrders()->count();
    }

    public function getUnconfirmOrders()
    {
        return Order::where('order_status','未确认订单')
                       ->orderby('order_date','asc')
                       ->get();
    }

    public function getUnconfirmOrdersCount()
    {
        return $this->getUnconfirmOrders()->count();
    }

    public function getOrdersByDealer($dealer)
    {
        return $this->getAllOrders()->where('dealer',$dealer);
    }

}