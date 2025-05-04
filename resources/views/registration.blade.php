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
  </style>
  </head>
  <header>
        @include('nav')
  </header>
  <body>
   <section class="container">
    <div class="row mt-5">
      <h3 class="text-center mt-5 pt-5">Registration Form</h3>
      <div class="col-4"></div>
      <div class="col-4 mt-4">
      <form class="row g-3" id="register" action="{{url('/register')}}" method="post">
        @csrf
      <div class="col-12">
    <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName" name="user_name">
  </div>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="user_email">
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="user_pass">
  </div> <div class="col-md-12">
    <label for="inputPassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="inputPassword" name="user_pass2">
  </div>
  <h6 class="mt-2">Already have an account? <a href="login.php">Login</a></h6>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
</form>
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
    
    $.validator.addMethod("containsUppercase", function(value) {
  return /[A-Z]/.test(value);
}, "Your password must contain at least one uppercase letter.");

$.validator.addMethod("containsLowercase", function(value) {
  return /[a-z]/.test(value);
}, "Your password must contain at least one lowercase letter.");

$.validator.addMethod("containsNumber", function(value) {
  return /\d/.test(value);
}, "Your password must contain at least one number.");

$.validator.addMethod("containsSpecialChar", function(value) {
  return /[!@#$%^&*]/.test(value);
}, "Your password must contain at least one special character.");

$.validator.addMethod("minLength", function(value) {
  return value.length >= 8;
}, "Your password must be at least 8 characters long.");


  $('#register').validate({
    rules: {
      user_name: {
        required: true
      },
      user_email: {
        required: true,
        email: true
      },
      user_pass: {
        required: true,
      containsUppercase: true,
      containsLowercase: true,
      containsNumber: true,
      containsSpecialChar: true,
      minLength: true
      },
      user_pass2: {
      required: true,
      equalTo: "#inputPassword4"
    }
    },
    messages: {
      user_name: {
        required: 'Please enter your name'
      },
      user_email: {
        required: 'Please enter your email',
        email: 'Please enter a valid email address'
      },
      user_pass: {
        required: "Please enter a password.",
        containsUppercase: ' password must contain at least one uppercase letter',
        containsLowercase: ' password must contain at least one lowercase letter',
        containsNumber: 'password must contain at least one number',
        containsSpecialChar: 'password must contain at least one special character',
        minlength: "Your password must be at least 8 characters long."
      },
      user_pass2: {
           required: "Please enter your password again",
           equalTo: "Paswword doesn't match"
      },
    },
  });
</script>
</body>
</html>
