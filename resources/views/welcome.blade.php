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

        <div class="col-6">
            

        </div>
         <div class="col-6">
            <a href="/show">
             <button class="btn btn-success">
              ViewData
            </button>
            </a>
             <button class="btn btn-success">
                 Profile
             </button>
             <a href="{{url('login')}}">
             <button class="btn btn-primary">
                 Login
             </button>
         </a>             <a href="{{url('upload')}}">
             <button class="btn btn-primary">
              upload
             </button>
         </a>
         </div>
     </div>

 </div>



 </body>
 </html>