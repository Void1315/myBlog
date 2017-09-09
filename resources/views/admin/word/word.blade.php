@extends('admin.layout.layout')
@section('word')
<div class="main">
	<!-- MAIN CONTENT -->
		<div class="main-content" id="app">
			<div class="container">
				<div class="row">
					<headimage url="{{url('/image')}}" _token="{{csrf_token()}}"></headimage>
				</div>
				<div class="row" >
					<editor _token="{{csrf_token()}}" url="{{url('/image')}}"> </editor>
				</div>
			</div>
		</div>
</div>
@endsection