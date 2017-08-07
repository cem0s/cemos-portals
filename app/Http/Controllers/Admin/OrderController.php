<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Doctrine\ORM\EntityManager;


class OrderController extends Controller
{
    protected $em;
    protected $orderRepo;


    public function __construct(EntityManager $em)
    {
    	$this->em = $em;
        $this->orderRepo = $em->getRepository('App\Entity\Commerce\Order');
    }

    public function index()
    {

    	
    	$orderData = $this->orderRepo->getAllOrders();
    
    	return view('admin.pages.orders.index')->with('orderData',$orderData);
    }

    public function orderDetails($id, $nId = 0)
    {
        
        $orderProductRepo = $this->em->getRepository('App\Entity\Commerce\OrderProduct');
        $order = $this->orderRepo->getOrderById($id);
        $orderProduct = $orderProductRepo->getOrderProductByOrderId($id);
        
        return view('admin.pages.orders.order-details')->with('data', array('order' => $order, 'oproduct' => $orderProduct, 'nId' => $nId));
    }

    public function changeOrderStatus(Request $request)
    {
        echo $this->orderRepo->updateOrderStatus($request->all());
        exit();
    }
}
