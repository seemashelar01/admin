@extends('admin.layout.master', ['pageTitle'=>"Welcome"])
@push('styles')
@endpush
@section('content')
  <div class="page-breadcrumb">
    <div class="row">
      <div class="col-5 align-self-center">
        <h4 class="page-title">Dasboard</h4>
        <div class="d-flex align-items-center">

        </div>
      </div>
      <div class="col-7 align-self-center">
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-3">
		<div class="card bg-cyan text-white">
			<div class="card-body">
				<div class="d-flex">
					<div class="m-r-10">
						<span>Active Members</span>
						<h4 id="activemember">--</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- column -->
	<div class="col-sm-12 col-lg-3">
		<div class="card bg-purple text-white">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div class="m-r-10">
						<span>Members Subscribed</span>
						<h4 id="activemembersub">--</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- column -->
	<div class="col-sm-12 col-lg-3">
		<div class="card bg-orange text-white">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div class="m-r-10">
						<span>Stock Companies</span>
						<h4 id="nsestock">--</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- column -->
	<div class="col-sm-12 col-lg-3">
		<div class="card text-white" style="background-color:rgb(76, 175, 80);">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div class="m-r-10">
						<span>Online Members</span>
						<h4 id="onlinemember">--</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
		<!-- column -->
	<div class="col-sm-12 col-lg-3">
		<div class="card text-white" style="background-color:#f62d51;">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div class="m-r-10">
						<span>Offline Members</span> 
						<h4 id="offlinemember">--</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
  </div>
 </div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('assets/init_site/backend/dashboard/index.js') }}"></script>
@endpush
