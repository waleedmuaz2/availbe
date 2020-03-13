@extends('layouts.frontendLayout.frontend_design')

@section('content')
<div class="main-content">
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-90 pb-50">
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Pricing Tables</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bg-lightest">
      <div class="container">
        <div class="heading-line-bottom">
          <h4 class="heading-title">Style One</h4>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table bg-lightest-fb text-center pt-30 pb-30" data-border="10px solid #ebebeb">
                <h1 class="package-type">Basic</h1>
                <h5 class="package-price text-theme-colored">Starting from <sup>$</sup>199</h5>
                <ul class="table-list">
                  <li>Case Evaluation</li>
                  <li>Assist in Case Development</li>
                </ul>
                <a class="btn btn-default" href="#">Signup Now!</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table bg-lightest-fb text-center pt-30 pb-30" data-border="10px solid #ebebeb">
                <h1 class="package-type">Premium</h1>
                <h5 class="package-price text-theme-colored">Starting from <sup>$</sup>599</h5>
                <ul class="table-list">
                  <li>Case Evaluation</li>
                  <li>Legal Educate Counsel</li>
                  <li>Assist in Case Development</li>
                  <li>Provide Written Statements</li>
                  <li>Testify at a Deposition and/or Trial</li>
                  <li>Prepare Demonstrative Evidence</li>
                  <li>Obtain Other Expert Witnesses</li>
                </ul>
                <a class="btn btn-default" href="#">Signup Now!</a>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table bg-lightest-fb text-center pt-30 pb-30" data-border="10px solid #ebebeb">
                <h1 class="package-type">Standard</h1>
                <h5 class="package-price text-theme-colored">Starting from <sup>$</sup>399</h5>
                <ul class="table-list">
                  <li>Educate Counsel</li>
                  <li>Assist in Case Development</li>
                  <li>Testify at a Deposition and/or Trial</li>
                  <li>Prepare Demonstrative Evidence</li>
                  <li>Obtain Other Expert Witnesses</li>
                </ul>
                <a class="btn btn-default" href="#">Signup Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Pricing -->    
     <section>
      <div class="container">
        <div class="heading-line-bottom">
          <h4 class="heading-title">Style Two</h4>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table style1 bg-lighter border-10px text-center">
                <div class="pt-40 pb-60">
                  <h3 class="package-type mt-40">Engine Diognostic</h3>
                  <p>Hurry to grap your offer now</p>
                  <h1 class="price text-theme-color-2 mb-10"><span class="font-48">$</span>80</h1>
                  <ul class="table-list pl-0 mb-30">
                    <li>Review of Safety Program</li>
                    <li>Annual Sexual Harassment Training</li>
                    <li>Monthly Newsletter</li>
                    <li>Safety Training Topics</li>
                  </ul>
                  <a href="#" class="btn btn-colored btn-theme-colored text-uppercase">Get Offer!</a><br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table style1 bg-lighter border-10px text-center">
                <div class="pt-40 pb-60">
                  <h3 class="package-type mt-40">Oil Changing</h3>
                  <p>Hurry to grap your offer now</p>
                  <h1 class="price text-theme-color-2 mb-10"><span class="font-48">$</span>60</h1>
                  <ul class="table-list pl-0 mb-30">
                    <li>Review of Safety Program</li>
                    <li>Annual Sexual Harassment Training</li>
                    <li>Monthly Newsletter</li>
                    <li>Safety Training Topics</li>
                  </ul>
                  <a href="#" class="btn btn-colored btn-theme-colored text-uppercase">Get Offer!</a><br>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table style1 bg-lighter border-10px text-center">
                <div class="pt-40 pb-60">
                  <h3 class="package-type text-uppercase mt-40">Brake Repair</h3>
                  <p>Hurry to grap your offer now</p>
                  <h1 class="price text-theme-color-2 mb-10"><span class="font-48">$</span>30</h1>
                  <ul class="table-list pl-0 mb-30">
                    <li>Review of Safety Program</li>
                    <li>Annual Sexual Harassment Training</li>
                    <li>Monthly Newsletter</li>
                    <li>Safety Training Topics</li>
                  </ul>
                  <a href="#" class="btn btn-colored btn-theme-colored text-uppercase">Get Offer!</a><br>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>
</div>
@endsection