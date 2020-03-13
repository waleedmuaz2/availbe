@extends('layouts.frontendLayout.frontend_design')

@section('content')
<div class="main-content">
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-90 pb-50">
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">Sitemap</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="heading-line-bottom">
              <h3 class="heading-title">Pages</h3>
            </div>
            <ul class="list angle-double-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Attorney</a></li>
              <li><a href="#">Photo Gallery</a></li>
              <li><a href="#">Pricing</a></li>
              <li><a href="#">Faq</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Under Construction</a></li>
              <li><a href="#">Page 404</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="heading-line-bottom">
              <h3 class="heading-title">Blog</h3>
            </div>
            <ul class="list angle-double-right">
              <li><a href="#">Create an Attractive Product</a></li>
              <li><a href="#">Useful Studio Services</a></li>
              <li><a href="#">Modern Design Trends</a></li>
              <li><a href="#">Meet our Community</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="heading-line-bottom">
              <h3 class="heading-title">Categories</h3>
            </div>
            <ul class="list angle-double-right">
              <li><a href="#">Creative</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Uncategorized</a></li>
              <li><a href="#">Updates</a></li>
              <li><a href="#">ShVideoop</a></li>
            </ul>
            <div class="heading-line-bottom">
              <h3 class="heading-title">Archives</h3>
            </div>
            <ul class="list angle-double-right">
              <li><a href="#">June 2014</a></li>
              <li><a href="#">March 2015</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
</div>
@endsection