@extends('index')

@section('title','註冊')
@section('content')
<div class="content" style="text-align:center;">
	<form>
  <input type="hidden" name="_token" value="{{csrf_token() /*Session::token()*/}}">
     <div>
      <label>姓名:</label>
      <input type="text" name="name"> 
     </div>
     <div>
      <label>帳號:</label>
      <input type="text" name="account"> 
     </div>
     <div>
      <label>密碼:</label>
      <input type="text" name="password"> 
     </div>
     <div>
      <input id="submit" type="submit" value="註冊">
     </div>
    </form>
</div>
<script>
$(function(){
	$("#submit").on("click",function(e){
		e.preventDefault();
		$.ajax({
			method:"POST",
			url:'{{ route('register') }}',
			dataType:'json',
			data:$("form").serialize(),
			success:function(data){
				console.log(data.message);
			},
			error:function(data){
				var errors = data.responseJSON;
        		console.log(errors);
			}
		});
	});
});
</script>
@endsection