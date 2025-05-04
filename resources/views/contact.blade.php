<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
      body{
  background-image: url("images/education_bg.jpg");
}
.form-label{
  color: black;
}
    </style>
</head>
<body>
    <header>
        @include('nav')
    </header>
<section class="contact mt-5">
    <div class=" container pt-4">
        <div class="row mt-5">
            <div class="col-md-6">
                <h3 class="my-4 form-label"> Contact Us</h3>
                <form class="row d-flex g-3 ms-5 ">
          
                    <div class="col-md-8 mb-2 ">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="inputName">
                      </div>
                    <div class="col-md-8 mb-2">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                   
                    <div class="col-md-8 mb-2">
                      <label for="inputAddress" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-8 mb-2">
                      <label for="inputPhn" class="form-label">Phone No</label>
                      <input type="text" class="form-control" id="inputphn">
                    </div>
                    <div class="col-md-8 mb-2">
                      <label for="inputCity" class="form-label">What Do have in Mind</label>
                      <textarea id="inputCity" class="form-control">
                        </textarea>                  
                      </div>
                      <div class="col-12 mt-3">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                      </div>
                  
                  </form>
            </div>
            <div class="col-md-6">
                <h3 class="my-4 form-label">Reach Us At</h3>
                <div class="form-label">
                    <h6>American International University - Bangladesh (AIUB)</h6>
                    <span >408/1, Kuratoli, Khilkhet, Dhaka 1229, Bangladesh</span><br>
                    <span>Email: info@aiub.edu</span><br>
                    <span>Telephone: +88 02 841 4046-9; +88 02 841 4050</span>
                </div>
                <div>
            <div class=" mt-4 p-0">
             <div class="container-fluid m-0 p-0">
                 <div id="map-container-google-4" class="z-depth-1-half map-container-4" style="height: 500px">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2855.416026261071!2d90.42392925815709!3d23.82118095110843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c711d13bbec7%3A0xc47f7c3e8e2263f2!2sAmerican%20International%20University%20-%20Bangladesh%20(AIUB)!5e0!3m2!1sen!2sbd!4v1685425698651!5m2!1sen!2sbd" width="600" height="450" style="border:0;"
                   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
            </div>
         </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section>
  @include('footer')
</section>
</body>
</html>