<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
</head>
<body>
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav> -->
        
        <img src="" alt="">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow  ">
            <div class="container">
            <img class="navbar-brand logo " href="#" src="A.jpg"  >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <div class="input-group mx-auto mt-3 mt-lg-0  ">
                    <h3>u ee ai uu ee a i hallo saya odi</h3>
                </div>


                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class='bx bx-accessibility'></i></a>
                </li>
                <li class="nav-item mt-5 mt-lg-0">
                    <a class="nav-link btn-secon text-center" href="logout.php">logout</a>
                </li>

                </ul>
            </div>
            </div>
        </nav>





        

        <section class="jumbo" >

<div class="container">

        
            <div class="jumbotron">
                <h3>
                    <b class="hehe" ><?php echo $_SESSION ['nama_siswa']?> </b>
                </h3>
                    
                <span>
                    <div class="row">
                        <div class="col-6">
                            <video width="500" height="450" controls>
                                <source src="fle.mp4" class="container-fluid" type="video/mp4">
                        </video>
                        </div>
                        <div class="col-6">
                            <h2>HOLA SAYA ADALAH PENJELAJAH WAKTU</h2>
                            <p>ini adalah video dari tahun 2022 yang akan dikirim ke </p>
                            <p>tahun 75767676 yang dimana video berformat mp4 sudah tidak ada</p>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                        <h2>HOLA SAYA ADALAH PENJELAJAH WAKTU</h2>
                            <p>ini adalah logo yang sangat artistik dan akan dikirim ke </p>
                            <p>tahun 75767676 yang dimana logo sudah tak memokirkan filosofi</p>
                            <p>logo sepertini sangat indah A "Alpha" melambangkan kepemimpinan </p>
                        </div>
                        <div class="col-6 anunya">
                            <img src="A.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    

                </span>


               
                
                
            </div>


    </div>


    </section>

    <!-- carosel -->
    <div class="header">
          <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <!-- testimonial -->
                    <section class="testimoni">
                      <div class="container">
                        <div class="row">

                          <div class="col-lg-4  col-md-6 mt-4 mt-sm-0 text-center">
                            <div class="card px-4 py-4">
                              <img src="owi.jpg"  width="100" class="rounded-circle img-fluid" alt="">
                              <i class='bx bxs-quote-alt-left'></i><br><br>
                              <p class="name fw-bold">orang lain</p>
                              <p class="body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, blanditiis.
                              </p>
                            </div>
                          </div>
                          
                          <div class="col-lg-4  col-md-6 mt-4 mt-sm-0 text-center">
                            <div class="card px-4 py-4">
                              <img src="owi.jpg"  width="100" class="rounded-circle img-fluid" alt="">
                              <i class='bx bxs-quote-alt-left'></i><br><br>
                              <p class="name fw-bold">orang satunya</p>
                              <p class="body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, blanditiis.
                              </p>
                            </div>
                          </div>
                          
                          <div class="col-lg-4  col-md-6 mt-4 mt-sm-0 text-center">
                            <div class="card px-4 py-4">
                              <img src="owi.jpg"  width="100" class="rounded-circle img-fluid" alt="">
                              <i class='bx bxs-quote-alt-left'></i><br><br>
                              <p class="name fw-bold">oh wi e</p>
                              <p class="body">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, blanditiis.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>                                  
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <section class="testimoni">
                    <div class="container">
                      <div class="row">

                        <div class="col-lg-4  col-md-6 mt-4 mt-sm-0 text-center">
                          <div class="card px-4 py-4">
                            <img src="owi.jpg"  width="100" class="rounded-circle img-fluid" alt="">
                            <i class='bx bxs-quote-alt-left'></i><br><br>
                            <p class="name fw-bold">gw iam fine</p>
                            <p class="body">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, blanditiis.
                            </p>
                          </div>
                        </div>
                        
                        <div class="col-lg-4  col-md-6 mt-4 mt-sm-0 text-center">
                          <div class="card px-4 py-4">
                            <img src="owi.jpg"  width="100" class="rounded-circle img-fluid" alt="">
                            <i class='bx bxs-quote-alt-left'></i><br><br>
                            <p class="name fw-bold">oh wi e</p>
                            <p class="body">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, blanditiis.
                            </p>
                          </div>
                        </div>
                        
                        <div class="col-lg-4  col-md-6 mt-4 mt-sm-0 text-center">
                          <div class="card px-4 py-4">
                            <img src="owi.jpg"  width="100" class="rounded-circle img-fluid" alt="">
                            <i class='bx bxs-quote-alt-left'></i><br><br>
                            <p class="name fw-bold">orang lain yang lainya</p>
                            <p class="body">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, blanditiis.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>  
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                  <section class="testimoni">
                    <div class="container">
                      <div class="row">

                        <div class="col-lg-4  col-md-6 mt-4 mt-sm-0 text-center">
                          <div class="card px-4 py-4">
                            <img src="owi.jpg"  width="100" class="rounded-circle img-fluid" alt="">
                            <i class='bx bxs-quote-alt-left'></i><br><br>
                            <p class="name fw-bold">oh wi e</p>
                            <p class="body">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, blanditiis.
                            </p>
                          </div>
                        </div>
                        
                        <div class="col-lg-4  col-md-6 mt-4 mt-sm-0 text-center">
                          <div class="card px-4 py-4">
                            <img src="owi.jpg"  width="100" class="rounded-circle img-fluid" alt="">
                            <i class='bx bxs-quote-alt-left'></i><br><br>
                            <p class="name fw-bold">oh wi e</p>
                            <p class="body">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, blanditiis.
                            </p>
                          </div>
                        </div>
                        
                        <div class="col-lg-4  col-md-6 mt-4 mt-sm-0 text-center">
                          <div class="card px-4 py-4">
                            <img src="owi.jpg"  width="100" class="rounded-circle img-fluid" alt="">
                            <i class='bx bxs-quote-alt-left'></i><br><br>
                            <p class="name fw-bold">oh wi e</p>
                            <p class="body">
                              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid, blanditiis.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>  
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">

                <img style="width: 100px;" src="perv.png" alt="">
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <img style="width: 100px;" src="next.png" alt="">
 
                
              </button>
            </div>
          </div>
        </div>
      <!-- selesai carosel -->



        
    
    
    
    <!-- <div class="footer">
        <div class="row">
            <div class="col-4">
                <div class="left">
                   <b> Di buat odi coy</b>
                   <a href="https://www.instagram.com/al_angka3/"><i class='bx bxl-instagram size-icon' style="font-size:30px" ></i></a>
                   <a href=""><i class='bx bxl-facebook' style="font-size:30px" ></i></a>
                   <a href=""><i class='bx bxl-youtube' style="font-size:30px"></i></a>

                </div>
            </div>
            <div class="col-4 ajg">
                <div class="left" style="">
                

                </div>
            </div>
            <div class="col-4">
            <p>©ngopy kuy:dibuat oleh tangan kiri owi</p> 
                </div>
            </div>
        </div> -->


        



        <div class="footer">
            <div class="row">

                <div class="col-2">
                    <b> Di buat odi coy</b>
                </div>
                <div class="col-2">
                   <a href="https://www.instagram.com/al_angka3/"><i class='bx bxl-instagram size-icon' style="font-size:30px" ></i></a>
                   <a href=""><i class='bx bxl-facebook' style="font-size:30px" ></i></a>
                   <a href=""><i class='bx bxl-youtube' style="font-size:30px"></i></a>
                   <a href=""><i class='bx bxl-discord-alt'style="font-size:30px"></i></a>

                </div>
                <div class="col-4">
                    
                </div>
                <div class="col-4">
                    <p>©ngopy kuy:dibuat oleh tangan kiri owi</p> 
                </div>


            </div>
        </div>
            



       

        
        




    </div>

    

        <script src="bootstrap.bundle.min.js"></script>
</body>
</html>