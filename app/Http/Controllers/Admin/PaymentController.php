<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function paymentOverview(){
    	return view('admin.payment.overview');
    }
    public function quickPayment(){
    	return view('admin.payment.quick');
    }
    public function paymentHistory(){
    	return view('admin.payment.history');
    }
    public function quickPaymentFaq(){
    	return view('admin.payment.quick_faq');
    }
}
