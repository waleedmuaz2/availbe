@extends('layouts.app')

@push('styles')
<style type="text/css">
    .accordion .card-header a{
        background-color: #e3e7ed !important;
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
        <div class="az-content az-content-profile">
            <div class="container mn-ht-100p">
                <div class="az-content-body az-content-body-profile">
                    <nav class="nav az-nav-line">
                        <a href="#overview" class="nav-link active show" data-toggle="tab">Overview</a>
                        <a href="#profile" class="nav-link" data-toggle="tab">Profile</a>
                        <a href="#" class="nav-link" data-toggle="tab">Banking</a>
                        <a href="#" class="nav-link" data-toggle="tab">Document</a>
                    </nav>
                    <div class="tab-pane" id="overview">
                        <div class="row mg-b-20">
                            <div class="col-sm-12">
                                hello
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile">
                        <div class="row mg-b-20">
                            <div class="col-sm-12">
                                hi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        
    </script>
@endpush
