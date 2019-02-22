<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- custom stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- main header or nav bar -->
<header>
<nav class="navbar navbar-expand-lg indigo">
  <a class="navbar-brand" href="#" style="font-size:30px; font-weight: bold; color: black">Regent Task</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto   ">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="font-size:30px; font-weight: bold; color: black">Venkat Reddy </a>
      </li>
    </ul>  
  </div>
</nav>
</header>


<!-- form content -->
<section id="img" >
    <div class="container center p-5">
        <div class="row">
            <div class="col-md-6">
            <form method="post" action="" enctype="multi-part/form data">
            <h1 class="mb-3">REGENT TASK FORM</h1>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter Email Address">
                </div>                
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPhone" placeholder="Enter You mobile Number">
                </div>
                <h3>Service</h3>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Editing<span style="color: red"> ( Price: $100 )</span></label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Proofreading<span style="color: red"> ( Price: $200 )</span></label>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Formatting<span style="color: red"> ( Price: $500 )</span></label>
                </div>               
                
                <div class="input-group mb-3">                            
                    <div class="input-group-prepend">
                        <button class="input-group-text" id="inputGroupFileAddon01">Upload</button>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>                       
                    </div>                    
                </div>
                <div class="form-group">
                <small><span style="color: red"> ****</span>Only upload Pdf or doc file format only</small>                  
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>