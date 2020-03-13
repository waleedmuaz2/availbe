@extends('layouts.frontendLayout.frontend_design')

@section('content')
<div class="main-content">
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
    <div class="container pt-90 pb-50">
      <div class="section-content pt-100">
        <div class="row">
          <div class="col-md-12">
            <h3 align="center" class="title text-white">FAQ Check</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div id="accordion1" class="panel-group accordion transparent">
            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion11" class="active" aria-expanded="true"> <span class="open-sub"></span> <strong>Q. How do you help me find professional to provide me service?</strong></a> </div>
              <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                <div class="panel-content">
                  <p>After filling out our simple form, you may receive quotes via phone or email from local partners/agents in your area who represent some of the best services for your needs. The agents can answer any questions you may have about coverage, and assist you in finding professional technician and mechanics that can save you money while meeting your needs. Additionally, many carriers now provide online quoting capabilities for those users who prefer to self service and our technology matches users through the information they provide to the carriers identified to meet their needs.
                    </p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-title"> <a class="collapsed" data-parent="#accordion1" data-toggle="collapse" href="#accordion12" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. How long does the process take?</strong></a> </div>
              <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                <div class="panel-content">
                  <p>Our form process is quick and easy. It takes less than 2 minutes to fill out our simple form. And you will begin receiving quotes from local agents usually within minutes of your request. Additionally requesting quotes from matched online carriers takes only a small additional investment of time for each one and we seek to make sure you are investing that time on the best carriers possible. These carriers typically provide a quote as well as the end of each of their online forms.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. When will I be contacted with service information?</strong></a> </div>
              <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                <div class="panel-content">
                  <p>Contact from carriers and local agents typically begins within minutes of your submission. Filling out additional online requests through carriers typically produces a result within minutes for each or provides further contact information to proceed via phone or email with them as well.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. How much does this service cost to get qotes?</strong></a> </div>
              <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                <div class="panel-content">
                  <p>This service is free of charge for our users.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="collapsed" aria-expanded="false"> <span class="open-sub"></span> <strong>Q. How will my information be used?</strong></a> </div>
              <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                <div class="panel-content">
                  <p>The information you provide us will be shared with insurance agents and providers that intend to assist you with insurance quotes and policy information. We will not sell or redistribute your information to any other third party other than in compliance with to our Privacy Policy.</p>
                  <p><a href="#">Privacy Policy</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="divider parallax layer-overlay overlay-white-9" data-parallax-ratio="0.1" data-bg-img="http://placehold.it/1920x1280">
    <div class="container">
      <div class="section-content text-center">
        <div class="row">
          <div class="col-md-12">
            <h3 class="mt-0">Did not find your answer?</h3>
            <h2>Just call at <span class="text-theme-color-2">(01) 234 5678</span> for emergency service</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection