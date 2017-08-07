<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Doctrine\ORM\EntityManager;


class TransactionsController extends Controller
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
    
    	return view('admin.pages.transactions.index')->with('orderData',$orderData);
    }
}
