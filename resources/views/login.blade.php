  <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title>Laravel Projects</title>

     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
     <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.esm.min.js "></script>
 </head>
 <body>
 <h1 class="text-center bg-info">WELLCOME TO HOME PAGE</h1>
 <div class="container">
     <div class="row">

        <div class="col-4">
            
        		<h1 class="text-danger text-bold">
        			Please Login Your Account
        		</h1>
        </div>
         <div class="col-8 bg-warning">
         
				<form class="form-data bg-"  action="{{url('userLogin')}}"> 
					<label >Email</label>
						<input type="email" name="email" placeholder="Email" class="form-control">
						<label>Pass</label>
						<input type="password" name="pass" class="form-control " placeholder="****">
						<input type="submit" name="Auth" value="Login" class="btn  btn-success mt-4">
				</form>  
		</div>
     </div>

 </div>



 </body>
 </html>
