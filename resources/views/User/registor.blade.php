@extends('Layout\userlayout')
@section('userMainContent')
<h1>Register</h1>
<div class="container">
<div class="main">
<form action="#" method="get" name="form_name" id="form_id" class="form_class" >
<h2>jQuery Form Submit Example</h2>
<label>Name :</label>
<input type="text" name="name" id="name" placeholder="Name" />
<label>Email :</label>

<input type="text" name="email" id="email" placeholder="Valid Email" />
<button  type="button" name="submit_id" id="btn_id">Submit</button>
{{-- <input type="button" name="submit_id" id="btn_id" value="Submit by Id" />
<input type="button" name="submit_name" id="btn_name" value="Submit by Name" />
<input type="button" name="submit_event" id="btn_event" value="Submit by Event" />
<input type="button" name="submit_class" id="btn_class" value="Submit by Class" />
<input type="button" name="submit_tag" id="btn_tag" value="Submit by Tag" /> --}}
</form>
</div>
</div>
@endsection

@section('scriptContent')
<script>
$(document).ready(function(){
 $('#btn_id').click(function(){
  // alert("The paragraph was clicked.");
  // localStorage.setItem("LoginDetails", "Done");
  window.location.href = 'userdashboard';
})
});
</script>
@endsection
