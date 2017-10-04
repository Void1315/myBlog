@extends('admin.layout.layout')
@section('tage')
<div class="main" id='app'>
	<div class="main-content">
		<div class="container">
			<tage-panel tage-date="{{$tageDate}}"></tage-panel>
		</div>
	</div>
</div>
@endsection
