@extends('layouts.frontendLayout.frontend_design')

@section('content')
<div class="main-content">
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg-img.png">
      <div class="container pt-10 pb-10">
        <div class="section-content pt-100">
          <div class="row">
            <div class="col-md-12">
              <h3 align="center" class="title text-white">MOTORMEN <br> Legal Agreements and Policies</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section data-bg-img="images/pattern/pattern7.png">
      <div class="container pt-20 pb-20">
        <h2 align="center" class="heading-border">To view any of the documents presented on this page,<br> Click on the policy/agreement.</h2>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <div class="horizontal-tab-centered">
                <ul class="nav nav-pills mb-10">
                  <li class="active"> <a href="#tab-20" class="" data-toggle="tab" aria-expanded="false"> <i class="fa fa-gavel"></i> Terms</a> </li>
                  <li class=""> <a href="#tab-21" data-toggle="tab" aria-expanded="false"> <i class="fa fa-gavel"></i>Privacy</a> </li>
                  <li class=""> <a href="#tab-22" data-toggle="tab" aria-expanded="true"> <i class="fa fa-briefcase"></i>Partners</a> </li>
                  <li class=""> <a href="#tab-23" data-toggle="tab" aria-expanded="false"> <i class="fa fa-balance-scale"> </i>Community Guideline</a> </li>
                  <li class=""> <a href="#tab-24" data-toggle="tab" aria-expanded="false"> <i class="fa fa-book"> </i>Data Request</a> </li>
                  <li class=""> <a href="#tab-25" data-toggle="tab" aria-expanded="false"> <i class="fa fa-balance-scale"></i>Deactivation</a> </li>
                  <li class=""> <a href="#tab-26" data-toggle="tab" aria-expanded="true"> <i class="fa fa-briefcase"></i>Intellectual Property</a> </li>
                  <li class=""> <a href="#tab-27" data-toggle="tab" aria-expanded="false"> <i class="fa fa-balance-scale"> </i>Policies</a> </li>
                  <li class=""> <a href="#tab-28" data-toggle="tab" aria-expanded="false"> <i class="fa fa-book"> </i>Affiliates Program</a> </li>
                  <li class=""> <a href="#tab-29" data-toggle="tab" aria-expanded="false"> <i class="fa fa-gavel"> </i>Security & Safety</a> </li>
                  <li class=""> <a href="#tab-30" data-toggle="tab" aria-expanded="false"> <i class="fa fa-gavel"> </i>General Terms and Conditions - Parts Retailers</a> </li>
                  <li class=""> <a href="#tab-31" data-toggle="tab" aria-expanded="false"> <i class="fa fa-gavel"></i>Other</a> </li>
                </ul>
                <div class="panel-body">
                  <div class="tab-content no-border">
                    <div class="tab-pane fade active in" id="tab-20">
                      <div class="row">
                        <div class="col-sm-4"><img alt="" src="http://placehold.it/290x330"></div>
                        <div class="col-sm-5">
                          <h4 class="mt-0 mb-30 line-bottom">Title One</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis, velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere adipisicing elit. Repellendus obcaecati, quos voluptatum facere velit quam.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis, velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere velit quam, esse rerum fugiat! Repellendus obcaecati.</p>
                          <a href="#" class="btn btn-gray btn-flat mt-10">Read more</a>
                        </div>
                        <div class="col-sm-3">
                          <h4 class="mt-0 mb-20 ml-5 line-bottom">Overview</h4>
                          <ul class="list-icon theme-colored">
                            <li><i class="fa fa-pencil-square-o"></i>1. Contractual Relationship</li>
                            <li><i class="fa fa-pencil-square-o"></i>2. Arbitration Agreement</li>
                            <li><i class="fa fa-pencil-square-oo"></i>3. The Services</li>
                            <li><i class="fa fa-pencil-square-o"></i>4. Services User Accounts Access and Usage.</li>
                            <li><i class="fa fa-pencil-square-o"></i>5. Payment</li>
                            <li><i class="fa fa-pencil-square-o"></i>6. Disclaimers; Limitation of Liability; Indemnity.</li>
                            <li><i class="fa fa-pencil-square-o"></i>7. Other Provisions Choice of Law.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-21">
                      <div class="row">
                        <div class="col-sm-4"><img alt="" src="http://placehold.it/290x330"></div>
                        <div class="col-sm-5">
                          <h4 class="mt-0 mb-30 line-bottom">Title Two</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis, velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere adipisicing elit. Repellendus obcaecati, quos voluptatum facere velit quam.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis, velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere velit quam, esse rerum fugiat! Repellendus obcaecati.</p>
                          <a href="#" class="btn btn-gray btn-flat mt-10">Read more</a>
                        </div>
                        <div class="col-sm-3">
                          <h4 class="mt-0 mb-20 ml-5 line-bottom">Working Process</h4>
                          <ul class="list-icon theme-colored">
                            <li><i class="fa fa-pencil-square-o"></i>Request Quote</li>
                            <li><i class="fa fa-search"></i>Investigation</li>
                            <li><i class="fa fa-file-text-o"></i>Making All Documents</li>
                            <li><i class="fa fa-clock-o"></i>Proper Use of Time</li>
                            <li><i class="fa fa-gavel"></i>Case Fight</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-22">
                      <div class="row">
                        <div class="col-sm-4"><img alt="" src="http://placehold.it/290x330"></div>
                        <div class="col-sm-5">
                          <h4 class="mt-0 mb-30 line-bottom">Title Three</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis, velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere adipisicing elit. Repellendus obcaecati, quos voluptatum facere velit quam.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis, velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere velit quam, esse rerum fugiat! Repellendus obcaecati.</p>
                          <a href="#" class="btn btn-gray btn-flat mt-10">Read more</a>
                        </div>
                        <div class="col-sm-3">
                          <h4 class="mt-0 mb-20 ml-5 line-bottom">Working Process</h4>
                          <ul class="list-icon theme-colored">
                            <li><i class="fa fa-pencil-square-o"></i>Request Quote</li>
                            <li><i class="fa fa-search"></i>Investigation</li>
                            <li><i class="fa fa-file-text-o"></i>Making All Documents</li>
                            <li><i class="fa fa-clock-o"></i>Proper Use of Time</li>
                            <li><i class="fa fa-gavel"></i>Case Fight</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-23">
                      <div class="row">
                        <div class="col-sm-4"><img alt="" src="http://placehold.it/290x330"></div>
                        <div class="col-sm-5">
                          <h4 class="mt-0 mb-30 line-bottom">Title Four</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis, velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere adipisicing elit. Repellendus obcaecati, quos voluptatum facere velit quam.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis, velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere velit quam, esse rerum fugiat! Repellendus obcaecati.</p>
                          <a href="#" class="btn btn-gray btn-flat mt-10">Read more</a>
                        </div>
                        <div class="col-sm-3">
                          <h4 class="mt-0 mb-20 ml-5 line-bottom">Working Process</h4>
                          <ul class="list-icon theme-colored">
                            <li><i class="fa fa-pencil-square-o"></i>Request Quote</li>
                            <li><i class="fa fa-search"></i>Investigation</li>
                            <li><i class="fa fa-file-text-o"></i>Making All Documents</li>
                            <li><i class="fa fa-clock-o"></i>Proper Use of Time</li>
                            <li><i class="fa fa-gavel"></i>Case Fight</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="tab-24">
                      <div class="row">
                        <div class="col-sm-4"><img alt="" src="images/services/5.jpg"></div>
                        <div class="col-sm-5">
                          <h4 class="mt-0 mb-30 line-bottom">Title Five</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis, velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere adipisicing elit. Repellendus obcaecati, quos voluptatum facere velit quam.</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi facilis, velit quam, esse rerum fugiat! Repellendus obcaecati, quos voluptatum facere velit quam, esse rerum fugiat! Repellendus obcaecati.</p>
                          <a href="#" class="btn btn-gray btn-flat mt-10">Read more</a>
                        </div>
                        <div class="col-sm-3">
                          <h4 class="mt-0 mb-20 ml-5 line-bottom">Working Process</h4>
                          <ul class="list-icon theme-colored">
                            <li><i class="fa fa-pencil-square-o"></i>Request Quote</li>
                            <li><i class="fa fa-search"></i>Investigation</li>
                            <li><i class="fa fa-file-text-o"></i>Making All Documents</li>
                            <li><i class="fa fa-clock-o"></i>Proper Use of Time</li>
                            <li><i class="fa fa-gavel"></i>Case Fight</li>
                          </ul>
                        </div>
                      </div>
                    </div>
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