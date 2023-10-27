<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gidugu&display=swap" rel="stylesheet">

</head>
<body class="" style="background: #03103E;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center" 
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                    <?php
    if($this->session->flashdata('error') !='')
    {
        echo '<div class="alert alert-danger">';
        echo $this->session->flashdata('error');
        echo '</div>';
    }
    ?>
    <form method="post" action="<?php echo base_url();?>index.php/register/proses">
    <div class="form-group">
                        <!-- Nested Row within Card Body -->
                        <div class="row" style="background: linear-gradient(140deg, #2697FF -7.05%, #19958D 109.66%);">
                            <div class="col-lg-6 d-none d-lg-block" style= "background: linear-gradient(103deg, #30B2EA -9.52%, #0DE4F1 -9.51%, #3114E4 105.61%);"><img style="width:500px; height:500px; margin-top:  " src="<?php echo base_url();?>assets/img/logo_delaundry_fix.png" alt="">
                            <p style="
color: #FFF;
font-family: Gidugu;
font-size: 38px;
font-style: normal;
font-weight: 400;
line-height: normal;
letter-spacing: 1.92px;
text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;
                            ">Bersihkan Dosa Anda Dengan DeLaundry</p>
                        </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                       <b> <h1 class="
h4 text-gray-900 mb-4" style="color: #FFF;
font-family: Gidugu;
font-size: 60px;
font-style: normal;
font-weight: 600;
line-height: normal;
-webkit-text-stroke-width: 1px;
-webkit-text-stroke-color: #black;">Pendaftaran Akun</h1></b> 
                                    </div>
                                    <form class="user" >
                                        <label for="name">Nama</label>
                                        <div class="form-group" style: width: 389px;
                                                    height: 48px;
                                                    flex-shrink: 0;>
                                            <input type="text" name="nama" class="form-control form-control-user"
                                            
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Nama Anda Disini....">
                                        </div>
</br><label for="username">Username</label>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukkan Username Akun Anda Disini....">
                                        </div>
</br><label for="password">Password</label>
                                        <div class="form-group">
                                            <input type="text" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukkan Password Anda Disini....">
                                        </div>
</br></div><center>
                                        <button type="submit" style="
width: 370px;
height: 76px;
flex-shrink: 0;
border-radius: 13px;
background: linear-gradient(180deg, rgba(65, 6, 59, 0.57) 0%, rgba(12, 2, 2, 0.69) 100%);
color: #fff;
font-family: Gurajada;
font-size: 45px;
font-style: normal;
font-weight: 400;
line-height: normal;
-webkit-text-stroke-width: 2px;
-webkit-text-stroke-color: #black;">Register</button>
</center>
                               </form>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</body>
</html>    


     