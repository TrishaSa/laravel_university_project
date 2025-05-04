<!DOCTYPE html>
<html>

<head>
  <title>Demo</title>
  <meta charset="utf-8">
  <meta name="_token" content="{{csrf_token()}}">
  <!-- step js css link -->
  {{-- <link href="jquery.steps.css" rel="stylesheet"> --}}
  <link href="{{ asset('css/jquery.steps.css') }}" rel="stylesheet">

  <!-- bootstarp css link  -->
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}

  <!--phone link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">
  <!--Font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .wizard-content .wizard>.steps>ul>li.current .step {
      border-color: #0d437cfc ;
      background-color: #fff;
      color: #0d437cbd 
  }
  .wizard-content .wizard > .steps > ul > li.done .step {
    border-color: #0d437cbd ;
      background-color:  #0d437cfc;
      color:  #fff;
}
.wizard-content .wizard.wizard-circle > .steps > ul > li::after {
  top: 45px;
  width: 50%;
  height: 3px;
  background-color: #0d437cbd;
}
.wizard-content .wizard.wizard-circle > .steps > ul > li::before {
  top: 45px;
  width: 50%;
  height: 3px;
  background-color: #0d437cbd;
}
.wizard-content .wizard > .actions > ul > li > a {
  background: #0d437cbd;
  color: #fff;
  display: block;
  padding: 7px 12px;
  border-radius: 4px;
  border: 1px solid transparent;
}
body{
  background-color: #0d36560f !important;
}
.panel{
  margin-top: 120px;
}
</style>
</head>
<body>
  <header>
   @include('nav')
  </header>

  <div class=" container">
    <div class="panel">
      <div class="panel-body wizard-content">
        <form id="example-form" action="{{url('/studentUpdate', ['id' => $students['id']]) }}" method="post" enctype="multipart/form-data" class="tab-wizard wizard-circle wizard clearfix">
         @csrf
          <h5>Basic Information</h5>
          <section class="container form_1 data_info">
            <div>
             <h4 class="p-2 text-white text-center rounded" style="background-color: #0d437cbd;">Basic information</h4>
              <div class="row g-3 mt-3">
                <div class="col-md-5">
                  <label for="inputName" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name" id="inputName" value="{{ $students->name }}">
                </div>
                <div class="col-md-5">
                  <label for="inputEmail4" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" value="{{ $students->email }}">
                </div>
                <div class="col-md-5">
                  <label for="inputDob" class="form-label">Dob</label>
                  <input type="date" class="form-control" name="dob" id="inputAddress" value="{{ $students->dob }}">
                </div>
                <div class="col-md-5">
                  <label for="inputPhone" class="form-label">Phone</label>
                  <br>
                  <input type="number" class="form-control" id="inputPhone" name="phone" style="width:513px;" value="{{ $students->phone }}">
                </div>
                <div class="form-group col-md-5">
                  <label for="exampleFormControlSelect1">District :</label>
                  <select class="form-control" id="district" name="district" value="{{$students->district}}">
                      <option value="">Select District</option>
                      @foreach($districts as $list)
                      <option value="{{$list->district_id}}" {{ $selectedDistrict->district_id == $list->district_id? 'selected' : '' }}>
                        {{$list->district_name}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group col-md-5">
                  <label for="inputthana4">Thana :</label>
                  <select class="form-control" id="thana" name="thana" value ="{{$students->thana}}">
                    <option value="">select district first</option>
                      @foreach ($thanas as $thana)
                          <option value="{{ $thana->thana_id }}" {{ $selectedThana->thana_id == $thana->thana_id ? 'selected' : '' }}>
                              {{ $thana->thana_name }}
                          </option>
                      @endforeach
                  </select>
                </div>
                <div class="col-md-5">
                  <label for="inputAddress" class="form-label">Address</label>
                  <textarea id="inputAddress" class="form-control" name="address">{{ $students->address }}</textarea>
                </div>
                <div class=" col-md-5">
                  <div class="form-check-inline" style="margin-top: 30px;">
                    <label class="form-check-label" for="gender">Gender :</label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineRadio1" value="Male" name="gender"
                    {{ $students->gender === 'Male' ? 'checked' : '' }}>             
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineRadio2" value="Female" name="gender"
                    {{ $students->gender === 'Female' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio3">Female</label>
                  </div>
                  <div class="form-check-inline">
                    <input class="form-check-input" type="radio" id="inlineRadio2" value="Other" name="gender"
                    {{ $students->gender === 'Other' ? 'checked' : '' }}>
                    <label class="form-check-label" for="inlineRadio2">Other</label>
                  </div>
                  <div>
                    <label for="gender" class="error"></label>
                  </div>
                </div>
                <div class="col-md-5">
                  <label for="exampleFormControlFile1">Profile picture :</label>
                  <input type="file" id="exampleFormControlFile1" class="form-control-file" accept="/image/*" onchange="previewImage(event);" name="image">
                  <img id="previewImg" style="height:150px" ; width="150px" src="{{ asset('images/' . $students->image) }}">
                </div>
              </div>
            </div>
          </section>
          <h5>Educational Information</h5>

          <section class="container form_2 data_info py-2">
            <div>
            <h4 class="p-2 text-white text-center rounded" style="background-color: #0d437cbd;">Educational information</h4>
              <table class="table table-bordered mt-5">
                <thead>
                  <tr>
                    <th scope="col">Institute Name</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Passing Year</th>
                    <th scope="col">Result</th>
                    <th scope="col">
                      <div class="action_container">
                        <button type="button" class="btn btn-success" onclick="create_tr('table_body')"><i class="fa-solid fa-plus"></i></button>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody id="table_body">
                  @if (count($educationList) === 0)
                  <tr>
                      <td><input type="text" class="form-control" name="institute[]" value=""></td>
                      <td><input type="text" class="form-control" name="degree[]" value=""></td>
                      <td><input type="text" class="form-control" name="year[]" value=""></td>
                      <td><input type="text" class="form-control" name="result[]" value=""></td>
                      <td>

                      </td>
                  </tr>
              @else
                  @foreach ($educationList as $index => $education)
                      <tr>
                          <input type="hidden"  name="id[]" value="{{ $education->id }}">
                          <td><input type="text" class="form-control" name="institute[]" value="{{ $education->Institute_name }}"></td>
                          <td><input type="text" class="form-control" name="degree[]" value="{{ $education->degree }}"></td>
                          <td><input type="text" class="form-control" name="year[]" value="{{ $education->passing_year }}"></td>
                          <td><input type="text" class="form-control" name="result[]" value="{{ $education->result }}"></td>
                          <td>
                              @if ($index > 0)
                                  <button type="button" class="btn btn-danger" onclick="removeRow(this)"><i class="fa-solid fa-minus"></i></button>
                              @endif
                          </td>
                      </tr>
                  @endforeach
              @endif
                </tbody>
              </table>
            </div>
          </section>

          <h5>Declaration</h5>
          <section class="container form_3 data_info py-2">
          <h4 class="p-2 text-white text-center rounded" style="background-color: #0d437cbd;">Declaration</h4>
            <div class="mt-5">
              <form class="decleration mt-3 mx-5">
                <div class="row mb-3">
                  <label for="inputFile" class="col-sm-2 col-form-label">File Name</label>
                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputFile" name="fineName" value="{{ $students->file_name }}">
                  </div>
                </div>
                <div class="col-md-5">
                  <label for="exampleFormControlFile1">Profile picture :</label>
                  <input type="file" id="exampleFormControlFile1" class="form-control-file" onchange="previewSign(event);" name="sign">
                  @if ($students != null)
                  <img id="previewSn" style="height: 150px; width: 150px;" src="{{ asset('images/' . $students->sign) }}">
              @endif                
            </div>
            </div>
            <div class="row mb-3 ms-1">
              <div class="col-sm-5 form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" name="terms" value="1" {{ $students->terms === 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="gridCheck">
                    I hereby declare that the information given above is true.
                </label>
            </div>
            
              <div>
                <label for="check" class="error"></label>
              </div>
            </div>
            <div>
              <button type="submit" name="submit" class="btn btn-primary btn_submit_test">Submit</button>
            </div>
        </form>
      </div>
      </section>
      </form>
    </div>
  </div>
  </div>
  <!-- step js link -->
  {{-- <script src="js/jquery-1.9.1.min.js"></script>
  <script src="js/jquery.steps.js"></script> --}}
  <script type="text/javascript" src="{{asset('js/jquery.steps.js') }}"></script>
  <script type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js') }}"></script>

 

  <!-- bootstarp link -->
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}

  <!-- validation link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

  <!-- phone code link -->
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

  <!-- jquery validation  -->
  <!-- <script>
    $(document).ready(function() {
      $.validator.addMethod("bdPhoneNumber", function(value, element) {
        return this.optional(element) || /^(?:\+?88|01)?\d{10}$/.test(value);
      }, "Please enter a valid Bangladeshi phone number");

      $('#example-form').validate({
        rules: {
          name: {
            required: true
          },
          email: {
            required: true,
            email: true
          },
          gender: {
            required: true
          },
          phone: {
            required: true,
          },
          check: {
            required: true,
          }
          // Add more validation rules for other fields if needed
        },
        // Add custom messages if required
        messages: {
          name: {
            required: 'Please enter your name'
          },
          email: {
            required: 'Please enter your email',
            email: 'Please enter a valid email address'
          },
          gender: {
            required: "Please enter your gender"
          },
          phone: {
            required: "Please enter your mobile number",
          },
          check: {
            required: "Please clicked the check button"
          }
        },

        success: function(label) {
          // Remove the error message
          label.remove();
        }

        // Add any other options or callbacks if needed
      });
    });
  </script> -->

  <!-- step js -->
  <script>
    // var form = $("#example-form");
    //    form.steps({
    //     headerTag: "h6",
    //     bodyTag: "section",
    //     transitionEffect: "fade",
    //     titleTemplate: '<span class="step">#index#</span> #title#'

    //   });

    var form = $("#example-form");
    form.steps({

      headerTag: "h5",
      bodyTag: "section",
      transitionEffect: "fade",
      titleTemplate: '<span class="step">#index#</span> #title#',
      onStepChanging: function(event, currentIndex, newIndex) {
        // Validate the current step before proceeding
        return form.valid();
      },
      onFinishing: function(event, currentIndex) {
        // Validate the final step before submitting
        return form.valid();
      },
      onFinished: function(event, currentIndex) {
        // Handle the form submission
        form.submit();
      }
    });
  </script>

  <!-- photo  upload and validation -->
  <script>
    function previewImage(event) {
      var input = event.target;
      if (input.files && input.files[0]) {
        var file = input.files[0];
        var reader = new FileReader();
        var imageType = /image\/(jpeg|jpg|png)/;

        if (imageType.test(file.type)) {
          reader.onload = function(e) {
            document.getElementById('previewImg').src = e.target.result;
          };
          reader.readAsDataURL(file);
        } else {
          // Display an error message or perform other actions for invalid file types
          alert('Please select a valid JPG or PNG image file.');
          input.value = ''; // Clear the file input to allow selecting a valid file again
        }
      }
    }
  </script>

  <!-- Sign upload and validation -->
  <script>
    function previewSign(event) {
      var input = event.target;
      if (input.files && input.files[0]) {
        var file = input.files[0];
        var reader = new FileReader();
        var imageType = /image\/(jpeg|jpg|png)/;

        if (imageType.test(file.type)) {
          reader.onload = function(e) {
            document.getElementById('previewSn').src = e.target.result;
          };
          reader.readAsDataURL(file);
        } else {
          // Display an error message or perform other actions for invalid file types
          alert('Please select a valid JPG or PNG image file.');
          input.value = ''; // Clear the file input to allow selecting a valid file again
        }
      }
    }
  </script>

  <!-- telephone code -->
  <script>
    var input = document.querySelector("#inputPhone");
    window.intlTelInput(input, {
      hiddenInput: "inputPhone",
      initialCountry: "BD",
      placeholderNumberType: "MOBILE",
      separateDialCode: true
    });
  </script>

  <!-- district & thana -->


  <!-- multiple row -->


<script>
  function create_tr(table_id) {
      let tableBody = document.getElementById(table_id);
      let firstRow = tableBody.querySelector('tr');
      let newRow = firstRow.cloneNode(true);
      // Reset the values of cloned input fields
      let inputs = newRow.querySelectorAll('input');
      inputs.forEach(input => {
        input.value = '';
      });

      tableBody.appendChild(newRow);

      newRow.lastElementChild.innerHTML = `<button type="button" class="btn btn-danger" onclick="removeRow(this)"><i class="fa-solid fa-minus"></i></button>`;
    }

    function removeRow(This) {
      This.closest('tr').remove();
    }
  </script>

<script>
  $(document).ready(function() {
 $('#district').on('change', function() {
  var districtID = $(this).val();

console.log(districtID);
  if (districtID !== '') {
  $.ajax({
   type: 'POST',
   url: '/get-thana',
   data: {
              district_id: districtID,
              _token: '{{csrf_token()}}'
            },
     success: function(html) {
     $('#thana').html(html);
             
         }
     }); 
}
});
});

</script>

</body>

</html>