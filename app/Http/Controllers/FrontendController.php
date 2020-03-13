<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarBrand;
use App\Models\CarType;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\CarCompany;


class FrontendController extends Controller
{
    public function book_now_page()
    {
        $car_brands = CarBrand::all();
        $car_types = CarType::all();
        $car_companies = CarCompany::all();
        $service_category = ServiceCategory::all();
        $extra_Service = Service::whereNull('service_category_id')->get();
        return view('frontend.book_now',compact('car_brands','car_types','service_category','extra_Service','car_companies'));
    }
    public function towing_book_page(){
        $car_brands = CarBrand::all();
        $car_types = CarType::all();
        $service_category = ServiceCategory::all();
        $extra_Service = Service::whereNull('service_category_id')->get();
        return view('frontend.towing_page',compact('car_brands','car_types','service_category','extra_Service'));
    }
    public function get_service(Request $request){
        $matched_service = Service::where('service_category_id',$request->input('id'))->get();
        return $matched_service;
    }
    public function matched_car_type(Request $request){
        $matched_car_type = CarBrand::where('car_category_id',$request->input('id'))->get();
        return $matched_car_type;
    }

    public function businessPartners()
    {
        return view('frontend.business_partner');
    }
    public function factsStats()
    {
        return view('frontend.facts_stats');
    }
    public function communityIndex()
    {
        return view('frontend.community_index');
    }
    public function fleetServiceRequest()
    {
        return view('frontend.fleet_service_request');
    }
    public function requestEstimate()
    {
        return view('frontend.request_estimate');
    }
    public function insuranceQuote()
    {
        return view('frontend.insurance_quote');
    }
    public function allServices()
    {
        return view('frontend.all_services');
    }
    public function loanCheck()
    {
        return view('frontend.loan_check');
    }
    public function helpDesk()
    {
        return view('frontend.help_desk');
    }
    public function faq()
    {
        return view('frontend.faq');
    }
    public function shopCart()
    {
        return view('frontend.shop_cart');
    }
    public function shopCheckout()
    {
        return view('frontend.shop_checkout');
    }
    public function aboutUs()
    {
        return view('frontend.about_us');
    }
    public function newsRoom()
    {
        return view('frontend.news_room');
    }
    public function career()
    {
        return view('frontend.career');
    }
    public function eShop()
    {
        return view('frontend.eshop');
    }
    public function productDetails()
    {
        return view('frontend.product_details');
    }
    public function legal()
    {
        return view('frontend.legal');
    }
    public function customerSupport()
    {
        return view('frontend.customer_support');
    }
    public function partnerSupport()
    {
        return view('frontend.partner_support');
    }
    public function reportAbuse()
    {
        return view('frontend.report_abuse');
    }
    public function affiliatePrograms()
    {
        return view('frontend.affiliate_programs');
    }
    public function tipsAdvice()
    {
        return view('frontend.tips_advice');
    }
    public function howWorks()
    {
        return view('frontend.how_works');
    }
    public function sitemap()
    {
        return view('frontend.sitemap');
    }
}
