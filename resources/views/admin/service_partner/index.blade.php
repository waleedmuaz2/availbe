@extends('layouts.app')

@push('styles')
<style type="text/css" media="screen">
    .form-inline{
        display: block !important;
    }
</style>
@endpush
@section('content')
    <div class="az-content-header d-block d-md-flex">
        <div>
          <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Hi Service Partner, welcome back!</h2>
          <p class="mg-b-0">This is your monitoring dashboard.</p>
        </div>
        <div class="az-dashboard-header-right">
            <div>
            <label class="az-content-label">Customer Ratings</label>
                <div class="az-star">
                  <i class="typcn typcn-star active"></i>
                  <i class="typcn typcn-star active"></i>
                  <i class="typcn typcn-star active"></i>
                  <i class="typcn typcn-star active"></i>
                  <i class="typcn typcn-star"></i>
                  <span>(12,775)</span>
                </div>
            </div>
            <div>
                <label class="az-content-label">Active</label>
                <h5>431,007</h5>
            </div>
            <div>
                <label class="az-content-label">Complete</label>
                <h5>932,210</h5>
            </div>
        </div>
    </div>
    <div class="az-content-body">
        <div class="card card-dashboard-seven">
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-6 col-lg-2">
                        <label class="az-content-label">Service Technicians and Mechanics</label>
                        <h2>1500</h2>
                    </div>
                    <div class="col-6 col-lg-3">
                        <label class="az-content-label">Small Engine Mechanics</label>
                        <h2>2000</h2>
                    </div>
                    <div class="col-6 col-lg-2 mg-t-20 mg-lg-t-0">
                        <label class="az-content-label">Diesel Service Technicians and Mechanics</label>
                        <h2>1000</h2>
                    </div>
                    <div class="col-6 col-lg-3 mg-t-20 mg-lg-t-0">
                        <label class="az-content-label">Automotive Body and Glass Repairers</label>
                        <h2>2500</h2>
                    </div>
                    <div class="col-6 col-lg-2 mg-t-20 mg-lg-t-0">
                        <label class="az-content-label">Car Wash/Detailing</label>
                        <h2>1800</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-dashboard-seven">
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-6 col-lg-2">
                        <label class="az-content-label">ST&E Revenue</label>
                        <h2><span>$</span>1500</h2>
                    </div>
                    <div class="col-6 col-lg-2">
                        <label class="az-content-label">SEM Revenue</label>
                        <h2><span>$</span>2000</h2>
                    </div>
                    <div class="col-6 col-lg-2 mg-t-20 mg-lg-t-0">
                        <label class="az-content-label">DST &M Revenue</label>
                        <h2><span>$</span>1000</h2>
                    </div>
                    <div class="col-6 col-lg-2 mg-t-20 mg-lg-t-0">
                        <label class="az-content-label">AB & GR Revenue</label>
                        <h2><span>$</span>2500</h2>
                    </div>
                    <div class="col-6 col-lg-2 mg-t-20 mg-lg-t-0">
                        <label class="az-content-label">AB & GR Revenue</label>
                        <h2><span>$</span>2500</h2>
                    </div>
                    <div class="col-6 col-lg-2 mg-t-20 mg-lg-t-0">
                        <label class="az-content-label">CW/D Revenue</label>
                        <h2><span>$</span>2500</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-dashboard-seven">
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="h2_font">Live Service Status Monitor</h2>
                            </div>
                        </div>
                        <hr> 
                        <table id="account_table1" class="table table-striped table-bordered" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>P.Type</th>
                                    <th>
                                        <select class="form-control">
                                            <option>Country</option>
                                            <option>UK</option>
                                            <option>DHK</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>State</option>
                                            <option>NY</option>
                                            <option>Alaska</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>City</option>
                                            <option>NY</option>
                                            <option>Florida</option>
                                        </select>
                                    </th>
                                    <th>Total Ac</th>
                                    <th>Active Ac</th>
                                    <th>Avg.Order</th>
                                    <th>C.Operation</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>P.Type</th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Total Ac</th>
                                    <th>Active Ac</th>
                                    <th>Avg.Order</th>
                                    <th>C.Operation</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>2011/04/25</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>
                                        <button class="btn btn-primary btn-xs" data-title="Edit"><span class="typcn typcn-edit"></span></button>
                                        <button class="btn btn-danger btn-xs" data-title="Delete"><span class="typcn typcn-trash"></span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-dashboard-seven">
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="h2_font">Regional Data Insight</h2>
                            </div>
                        </div>
                        <hr> 
                        <table id="account_table2" class="table table-striped table-bordered" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>P.Type</th>
                                    <th>No. of Partner</th>
                                    <th>
                                        <select class="form-control">
                                            <option>Country</option>
                                            <option>UK</option>
                                            <option>DHK</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>State</option>
                                            <option>NY</option>
                                            <option>Alaska</option>
                                        </select>
                                    </th>
                                    <th>Revenue Year 2019</th>
                                    <th>Total Orders</th>
                                    <th>Active Orders</th>
                                    <th>Closed Orders</th>
                                    <th>Cancelled & Remark</th>
                                    <th>Void & Remark</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>P.Type</th>
                                    <th>No. of Partner</th>
                                    <th>
                                        <select class="form-control">
                                            <option>Country</option>
                                            <option>UK</option>
                                            <option>DHK</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>State</option>
                                            <option>NY</option>
                                            <option>Alaska</option>
                                        </select>
                                    </th>
                                    <th>Revenue Year 2019</th>
                                    <th>Total Orders</th>
                                    <th>Active Orders</th>
                                    <th>Closed Orders</th>
                                    <th>Cancelled & Remark</th>
                                    <th>Void & Remark</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Tiger</td>
                                    <td>10</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>205</td>
                                    <td>200</td>
                                    <td>100</td>
                                    <td>$320,800</td>
                                    <td>12</td>
                                    <td>10</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-dashboard-seven">
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="h2_font">Onboard Partner Data Insight</h2>
                            </div>
                        </div>
                        <hr> 
                        <table id="account_table3" class="table table-striped table-bordered" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>P.Type</th>
                                    <th>
                                        <select class="form-control">
                                            <option>Country</option>
                                            <option>UK</option>
                                            <option>DHK</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>State</option>
                                            <option>NY</option>
                                            <option>Alaska</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>City</option>
                                            <option>NY</option>
                                            <option>Florida</option>
                                        </select>
                                    </th>
                                    <th>Total Ac</th>
                                    <th>Active Ac</th>
                                    <th>Waitlist Account</th>
                                    <th>Hold Account</th>
                                    <th>Deactivate Accounts</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>P.Type</th>
                                    <th>
                                        <select class="form-control">
                                            <option>Country</option>
                                            <option>UK</option>
                                            <option>DHK</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>State</option>
                                            <option>NY</option>
                                            <option>Alaska</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>City</option>
                                            <option>NY</option>
                                            <option>Florida</option>
                                        </select>
                                    </th>
                                    <th>Total Ac</th>
                                    <th>Active Ac</th>
                                    <th>Waitlist Account</th>
                                    <th>Hold Account</th>
                                    <th>Deactivate Accounts</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>2011/04/25</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                    <td>320</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-dashboard-seven">
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="h2_font">Regional Data Insight  Active Orders</h2>
                            </div>
                        </div>
                        <hr> 
                        <table id="account_table4" class="table table-striped table-bordered" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>SR No.</th>
                                    <th>Partners ID</th>
                                    <th>City</th>
                                    <th>Order Date</th>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Orders Status</th>
                                    <th>Shipment Date</th>
                                    <th>Order Total</th>
                                    <th>Summery</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>SR No.</th>
                                    <th>Partners ID</th>
                                    <th>City</th>
                                    <th>Order Date</th>
                                    <th>Products</th>
                                    <th>Quantity</th>
                                    <th>Orders Status</th>
                                    <th>Shipment Date</th>
                                    <th>Order Total</th>
                                    <th>Summery</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>123456</td>
                                    <td>NY</td>
                                    <td>Jan/04/2019</td>
                                    <td>5</td>
                                    <td>2</td>
                                    <td>
                                    	Service in 
										<br>
                                    	Process
                                    </td>
                                    <td>Jan/04/2019</td>
                                    <td>$50</td>
                                    <td>view</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#account_table1').dataTable();
             $("[data-toggle=tooltip]").tooltip();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#account_table2').dataTable();
             $("[data-toggle=tooltip]").tooltip();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#account_table3').dataTable();
             $("[data-toggle=tooltip]").tooltip();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#account_table4').dataTable();
             $("[data-toggle=tooltip]").tooltip();
        } );
    </script>
@endpush
