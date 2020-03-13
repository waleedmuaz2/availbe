@extends('layouts.app')

@section('content')
    @if(!auth()->user()->hasVerifiedEmail())
        <div class="alert alert-warning text-center" role="alert">
            <strong>Email not verified !</strong> <br>Please verify your email to confirm service request.
        </div>
    @endif
    <div class="az-content-body">
    	<div class="row row-sm mg-b-15 mg-t-20 mg-sm-b-20">
            <div class="col-lg-12 col-xl-12">
                <div class="card card-dashboard-six">
				    <resarvation-form></resarvation-form>
				    <customer-dashboard></customer-dashboard>
				</div>
			</div>
		</div>
	</div>
@endsection
