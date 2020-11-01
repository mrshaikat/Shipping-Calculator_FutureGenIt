<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shipping Calculator</title>

    <!-- Bootstrap Css Link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Style Css LInk -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Style Responsive Css Link -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

<?php 

    if( isset( $_POST['submit'] ) ){

        $customer_name = $_POST['c_name'];
        $product_name = $_POST['p_name'];
        $product_weight = $_POST['p_weight'];
        $unit_cost = $_POST['u_cost'];
        $location = $_POST['location'];
        $shipping_cost = $_POST['sp_cost'];
        
        if( empty($product_weight) || empty($unit_cost) || empty($shipping_cost )   ){

            $message = "<p class='alert alert-danger text-center'>Fild must not be Empty!! <button class='close' data-dismiss='alert'>&times;</button> </p>";


        }
        else{

            $net_cost = $product_weight * $unit_cost;
            $total_cost =  $net_cost + $shipping_cost ;

        }


    }

?>
 <div class="message">
                       <?php

                        if( isset($message) ){

                              echo $message;
                        }
                       
                       ?>
                 </div>


    
    
    <div class="system_developmen">


    <div class="row">
        <div class="col-md-12">

                <div class="shipping">
                <div class="card">
                <div class="card-header">
                    <h2 class=" card-header text-center">Shipping Calculator </h2>
                </div>
                <div class="card-body">
                   <form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="POST">



                   <div class="form-group">
                        <label for="">Customer Name</label>
                        <input name="c_name" class="form-control w-75" type="text">
                    </div>

                    <div class="form-group">
                        <label for="">Product Name</label>
                        <input name="p_name" class="form-control w-75" type="text">
                    </div>

                    <div class="form-row">

                        <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Product Weight</label>
                        <input name="p_weight" type="number" class="form-control" placeholder="Weight in KG">
                        </div>
                        <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Unit Cost</label>
                        <input name="u_cost" type="number" class="form-control" placeholder="Price Per Unit">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="">Location</label>
                        <select name="location" id="">
                            <option value="Mirpur">Mirpur</option>
                            <option value="Banani">Banani</option>
                            <option value="Mohakhali">Mohakhali</option>
                            <option value="Mothijhil">Mothijhil</option>
                            <option value="Uttara">Uttara</option>
                        </select>
                        <small>Inside Dhaka 100 TK</small>
                    </div>

                    <div class="form-group">
                        <label for="">Shipping Cost</label>
                        <input name="sp_cost" class="form-control" type="number">
                    </div>

                    <div class="form-group">
                        
                        <input name="submit" class="btn btn-block btn-info" value="Culculate" type="submit">
                    </div>

                        <hr>
                   

            <div class="input-group">
                <div class=" input-group-prepend">
                    <div class="input-group-text">
                        Total Cost : 
                    </div>
                </div>

                 <input class="form-control" type="text" value="
                       <?php
                        
                        error_reporting(0);

                        echo $total_cost ; 
                        
                        ?> ">

                <div class="input-group-prepend">
                    <div class="input-group-text">
                        Taka 
                    </div>
                </div>


                    
            </div>
        </div>


                        <table class="table table-striped table-hover table-borderless">
                            <thead class="thead-dark">
                                <tr>
                                    <th>C_name</th>
                                    <th>P_name</th>
                                    <th>Weight</th>
                                    <th>Unit</th>
                                    <th>S_cost</th>
                                    <th>Location</th>
                                </tr>
                                <tr>
                                    <td> <?php echo $customer_name ?> </td>
                                    <td><?php echo $product_name ?></td>
                                    <td><?php echo $product_weight ?></td>
                                    <td><?php echo $unit_cost ?></td>
                                    <td><?php echo $shipping_cost ?></td>
                                    <td><?php echo $location ?></td>
                                </tr>
                            </thead>
                        </table>

                    






                   </form>

                </div>
                <div class="card-footer">
                    <a class=" card-link font-weight-bold" href="http://www.futuregenit.com">
                    Future Gen It
                </a>
                </div>
            </div>
                </div>
           



        </div>
    </div>

    
    </div>


    <!-- Jquery Link -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    </script>

</body>

</html>