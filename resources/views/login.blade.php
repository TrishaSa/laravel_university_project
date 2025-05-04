<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
    .error{
      color: red;
    }
    .footer{
  background: #242c42;
    color: azure;
    margin-top: 160px;
}

  </style>
  </head>
  <header>
        @include('nav')
  </header>
  <body>
   <section class="container">
    <div class="row login mt-5 pt-5">
    <h2 class="text-center">Sign in</h2>
      <div class="col-4"></div>
      <div class="col-4 mt-4">
      <form class="row g-3" id="login" action="{{url('/login')}}" method="post">
        @csrf
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="inputEmail4">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="inputPassword4">
  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
<h6 class="mt-3">Not have an account? <a href="registration.php">Register</a></h6>

      </div>
      <div class="col-4"></div>
    </div>
   </section>

   <section>
    @include('footer')
  </section>
  
           <!-- validation link -->
           <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
       <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
<script>
  
  $('#login').validate({
    rules: {
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
      }
    },

    messages: {

      email: {
        required: 'Please enter your email',
        email: 'Please enter a valid email address'
      },
      password: {
        required: "Please enter a password",
      },
    },
  });
</script>

</body>
</html>
