<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Alta Desarrollador</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="css/miestilo.css">
	<link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152092/smartwizard/smart_wizard.min.css" rel="stylesheet" type="text/css" />
 <link href="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152092/smartwizard/smart_wizard_theme_dots.min.css" rel="stylesheet" type="text/css" />
 
</head>
<body>
	<div class="container">
     <div class="row d-flex justify-content-center mt-200"> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Launch multistep Wizard </button> </div> 

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Smart Wizard modal</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                 </div>
                 <div class="modal-body">
                     <div id="smartwizard">
                         <ul>
                             <li><a href="#step-1">Step 1<br /><small>Account Info</small></a></li>
                             <li><a href="#step-2">Step 2<br /><small>Personal Info</small></a></li>
                             <li><a href="#step-3">Step 3<br /><small>Payment Info</small></a></li>
                             <li><a href="#step-4">Step 4<br /><small>Confirm details</small></a></li>
                         </ul>
                         <div>
                             <div id="step-1">
                                 <div class="row">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Name" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Email" required> </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Password" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Repeat password" required> </div>
                                 </div>
                             </div>
                             <div id="step-2">
                                 <div class="row">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Address" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="City" required> </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="State" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Country" required> </div>
                                 </div>
                             </div>
                             <div id="step-3" class="">
                                 <div class="row">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Card Number" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Card Holder Name" required> </div>
                                 </div>
                                 <div class="row mt-3">
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="CVV" required> </div>
                                     <div class="col-md-6"> <input type="text" class="form-control" placeholder="Mobile Number" required> </div>
                                 </div>
                             </div>
                             <div id="step-4" class="">
                                 <div class="row">
                                     <div class="col-md-12"></div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1581152197/smartwizard/jquery.smartWizard.min.js"></script>
<script src="js/control.js"></script>
</html>