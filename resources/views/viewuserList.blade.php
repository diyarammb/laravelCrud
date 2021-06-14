
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ViewUserList</title>
		     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
		     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
     <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.esm.min.js "></script>
 
</head>
<body>

<h1 class="text-center bg-info">View User</h1>
<a href="{{url('/')}}" class="btn-success btn">Home</a>

<table class="table mt-4">
	<tr>
		<th>ID</th>
		<th> </th>
		<th>Name</th>
		<th>Email</th>
		<th>Status</th>
		<th>update</th>
		<th>Delete</th>
	</tr>

@foreach($result as $val =>$data)


<tr>
	<form action="{{url('update')}}">	
	 <td>{{$data->id}}</td>
	<td><input type="hidden" name="id" value="{{$data->id}}"></td>
	<td><input type="text" name="Name" value="{{$data->name}}"></td>
	<td><input type="email" name="email" value="{{$data->email}}" readonly></td>
	<td><input type="checkbox" name="status" value="{{$data->status}}" ></td>
	<td>
    <button class="btn btn-success"><i class="fa fa-edit" type="submit"></i> </button></td>
	</form>
	<td><a href="{{url('/delete/'.$data->id)}}" class="btn btn-danger"> <i class="fa fa-trash"></i> </a></td>
</tr>
@endforeach
</table>


<!-- //models 
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Record #(<span class="modal-data"></span>)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 
      	<form action="{{url('updateuser')}}">
      		<label>Name</label>
      		<input type="text" name="name" class="form-control">
      		<label>Name</label>
      		<input type="eami" name="email" class="form-control">
      		<label>Name</label>
      		<input type="text" name="status" class="form-control">
      	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id='close'>Close</button>
        </form>
      </div>
    </div>
  </div>
</div>
-->
<script src="{{url('assets/js/jquery.js')}}"></script>
<script >
//  $('#update').on('click', function () {
//    $(".modal").show();
//     var Uid = $(this).data("eid");
//      $(".modal-data").html(Uid)
//       $("updateform").on("submit",function(e){


// $.ajax({
// 	url:"{{url('update')}}",
// 	type:get,
// 	data:$(this).serialize(),
// })

//       });
// })
//  $('#close').on('click', function () {
//    $(".modal").hide();
 
// })
// $("#update").on("click",function(){
// alert()
// });

</script>
</body>
</html>