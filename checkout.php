<?php

 function checkInput($input)
 {
     $input = htmlspecialchars($input);
     $input = trim($input);
     $input = stripcslashes($input);   
     return $input;        
 }

 
if(isset($_POST['submit'])){
    $name = checkInput($_POST['name']);
    $email = checkInput($_POST['email']);
    $phone = checkInput($_POST['phone']);

    if(isset($_POST['editing'])){
        $editing = 'Editing';
        $priceEdit = 100;
    }
    if(isset($_POST['proofreading'])){
        $proofreading = 'Proofreading';
        $priceProof = 200;
    }
    if(isset($_POST['formatting'])){
        $formatting = 'Formatting';
        $priceForm = 500;
    }    

    $filename = $_FILES['doc']['name'];
    $tempname = $_FILES['doc']['tmp_name'];
    $location = "files/";   

    move_uploaded_file($tempname, $location.$filename);





}


?>
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

<section class="p-5 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offeset-3">
                <div class="card" style="width: 18rem;">
                    <img src="img/doc-pdf.jpg" class="card-img-top" alt="description of the file">
                    <div class="card-body">
                        <h5 class="card-title">Services Required</h5>
                        <p class="card-text">
                            <?php if(isset($editing) && isset($priceEdit)){echo $editing. ': $'.$priceEdit; } ?><br>
                            <?php if(isset($proofreading) && isset($priceProof)){echo $proofreading. ': $'.$priceProof; } ?><br>
                            <?php if(isset($formatting) && isset($priceForm)){echo $formatting. ': $'.$priceForm; } ?>
                        </p>
                        

                        
                        <?php
                        $total = 0;

                            // single serice selected
                            if(isset($priceEdit) && empty($priceProof) &&  empty($priceForm)){
                                $total = number_format($priceEdit);
                            } 
                            if(isset($priceProof) && empty($priceEdit) &&  empty($priceForm)){
                                $total = number_format($priceProof);
                            } 

                            if(isset($priceForm) && empty($priceProof) &&  empty($priceEdit)){
                                $total = number_format($priceForm);
                            }

                            // dual service selected
                            if (isset($priceEdit) && isset($priceProof) && empty($priceForm)) {
                                $total = number_format($priceEdit + $priceProof);
                            }
                            if (isset($priceForm) && isset($priceProof) && empty($priceEdit)) {
                                $total = number_format($priceForm + $priceProof);
                            }
                            if (isset($priceEdit) && isset($priceForm) && empty($priceProof)) {
                                $total = number_format($priceEdit + $priceForm);
                            }

                            // all services selected
                            if (isset($priceForm) && isset($priceProof) &&  isset($priceEdit)) {
                                $total = number_format($priceEdit + $priceProof + $priceForm);
                            }

                             
                            




                        //     if(isset($priceEdit) ){
                        //         $total = number_format($priceEdit);

                        //         if(isset($priceProof) ){
                        //             $total = number_format($priceProof + $priceEdit);
                        //             if(isset($priceForm) ){
                        //                 $total = number_format($priceForm + $priceProof + $priceEdit);
                        //             }
                        //         }
                                
                        //     }
                        //         if(isset($priceProof) ){
                        //             $total = number_format($priceProof);
                        //             if(isset($priceForm) ){
                        //                 $total = number_format( $priceProof + $priceEdit);
                        //             }
                        //         }
                             
                        //  if(isset($priceForm) ){
                        //      $total = number_format($priceForm);
                        // }
                        ?>
                        <p class="footer">Total = <?php if(isset($total)){ echo '$'. $total; } ?></p>
                        <!-- <a href="#" class="btn btn-primary">Proceed To Pay</a> -->

                        <form action="pay.php" method="post">
                            <input type="hidden" name="name" value= "<?php echo $name; ?>">
                            <input type="hidden" name="email" value= "<?php echo $email; ?>">
                            <input type="hidden" name= "phone" value= "<?php echo $phone; ?>">                            
                            <input type="hidden" name="total" value= "<?php echo $total; ?>">
                            <input type="submit" name="pay" value= "Proceed To Pay<?php echo $total; ?>" class="btn btn-primary">                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>