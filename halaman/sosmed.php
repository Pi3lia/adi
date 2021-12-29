<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    //echo "hallo world";
    ?>
    <!-- <nav class="navbar navbar-expand-lg navbar-light d-none d-lg-block bg-light"> -->
    <!-- <div class="container-fluid"> -->
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" -->
    <!-- data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" -->
    <!-- aria-label="Toggle navigation"> -->
   
       

        
               
       
        
    <div class="row">
        <div class="col-7"></div>
        <div class="col-4"></div>
    </div>
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    </div>
    </nav>
    <center>
    <!-- Bottom Navbar -->
    <div align='center'>
    <table align='center'>
    
        
          <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi,"SELECT * FROM upload");
		while($b = mysqli_fetch_array($data)){
			?>
        <div class="card" style="width: 18rem;">
  <img src="<?php echo $b['gambar'];?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><table>
                                 <tr>
                                     <td>
                                     <button><i class="fa fa-heart" style="color:red;"></i></button>
                                     </td>
                                 </tr>
    </table> <?php echo $b['caption'];?></h5>
   
  </div>
<?php }?>
        
        
</div>
        </div>   
        </center>   
    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="clearfix py-4">
                <!-- <img src="../login/asset/kucing1.jpg" class="col-lg-6 float-md-end mb-3 ms-md-3 img-thumbnail img-fluid" -->

                <!-- <div class="card-lg" style="width: 18rem;"> -->
                <!-- <img src="../login/asset/airterjun.jpg" class="card-img-top"> 
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="../login/asset/kucing2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>-->
                <!-- Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
                    crossorigin="anonymous"></script>
</body>

</html>