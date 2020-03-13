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
            <h2 class="az-content-title tx-24 mg-b-5 mg-b-lg-8">Hi, welcome back!</h2>
            <p class="mg-b-0">Your Web Analysis Dashboard Template</p>
        </div>
        <div class="az-dashboard-header-right">
            <div>
            <label class="az-content-label">Start Date</label>
                <p>Oct 10, 2018</p>
            </div>
            <div>
                <label class="az-content-label">End Date</label>
                <p>Oct 10, 2019</p>
            </div>
            <div>
                <label class="az-content-label">Event Category</label>
                <p>All Category</p>
            </div>
            <div>
                <button class="btn btn-az-primary btn-block">Export</button>
            </div>
        </div>
    </div>
    <div class="az-content-body">
        <div class="card card-dashboard-seven">
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="h2_font">Payment History</h2>
                            </div>
                        </div>
                        <hr> 
                        <table id="account_table1" class="table table-striped table-bordered" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>P. Type</th>
                                    <th>
                                        <select class="form-control">
                                            <option>Country</option>
                                            <option>USA</option>
                                            <option>UK</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>State</option>
                                            <option>Florida</option>
                                            <option>Florida</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>City</option>
                                            <option>Tampa</option>
                                            <option>Tampa</option>
                                        </select>
                                    </th>
                                    <th>Last Payout</th>
                                    <th>Rewards</th>
                                    <th>Refferals</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>P. Type</th>
                                    <th>
                                        <select class="form-control">
                                            <option>Country</option>
                                            <option>USA</option>
                                            <option>UK</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>State</option>
                                            <option>Florida</option>
                                            <option>Florida</option>
                                        </select>
                                    </th>
                                    <th>
                                        <select class="form-control">
                                            <option>City</option>
                                            <option>Tampa</option>
                                            <option>Tampa</option>
                                        </select>
                                    </th>
                                    <th>Last Payout</th>
                                    <th>Rewards</th>
                                    <th>Refferals</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>service</td>
                                    <td>USA</td>
                                    <td>Florida</td>
                                    <td>Tampa</td>
                                    <td>$150</td>
                                    <td>$150</td>
                                    <td>$20</td>
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
@endpush
