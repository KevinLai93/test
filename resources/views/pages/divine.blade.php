@extends('index')
@section('title','抽牌')
@section('content')
<div class="content" style="text-align:center;">
	<div class="card">
		<div class="card-content">
			<div>
				<b>花色:</b>
			</div>
			<div>
				<b>數字:</b>
			</div>
			<div>
				<b>種類:2</b>
			</div>
			<div>
				<b>敘述:2</b>
				<p></p>
			</div>
		</div>
	<div>
</div>

<script>
$(function(){
	$(document).on("click",".card",function(){
		$(this).toggleClass('show');
	});
});
</script>

@endsection