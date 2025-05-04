<!DOCTYPE html>
<html>
    <head>
        <title>Demo</title>
        <meta charset="utf-8">
        <!-- Bootstrap CSS link -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
        <!-- Custom CSS -->
        <!-- Font Awesome link -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            .panel{
                margin-top: 170px;
            }
        </style>
    </head>
    <body>
  <header class="mb-5">
        @include('nav')
     </header>
    <div class="container">
    <div class="panel">
        <div class="panel-body wizard-content">
            <div class="card" style="margin-top: 80px;">
                <h5 class="card-header text-white" style="background-color: #0d437cbd;">
                    Basic Information
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="v_label">Name</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label label-success label_tracking_no">{{ $students->name }}</span>
                        </div>
                        <div class="col-md-3">
                            <span class="v_label">Email</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label">{{ $students->email }}</span>
                        </div>
                        <div class="col-md-3">
                            <span class="v_label">Dob</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label">{{ $students->dob }}</span>
                        </div>
                        <div class="col-md-3">
                            <span class="v_label">Phone</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label">{{ $students->phone }}</span>
                        </div>
                        <div class="col-md-3">
                            <span class="v_label">District</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label">{{ $students->district_name }}</span>
                        </div>
                        <div class="col-md-3">
                            <span class="v_label">Thana</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label">{{ $students->thana_name }}</span>
                        </div>
                        <div class="col-md-3">
                            <span class="v_label">Address</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label">{{ $students->address }}</span>
                        </div>
                        <div class="col-md-3">
                            <span class="v_label">Gender</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label">{{ $students->gender }}</span>
                        </div>
                        <div class="row mt-2">
                        <div class="col-md-3">
                            <span class="v_label">Profile Photo</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label"><img src="{{ asset('images/' . $students->image) }}" style="height:150px"; width="150px"></span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <h5 class="card-header text-white" style="background-color: #0d437cbd;">
                    Educational Information
                </h5>
                <section class="container form_2 data_info py-2"> 
       <div>
          <table class="table table-bordered mt-3">
          <thead>
            <tr>
                <th>Institute Name</th>
                <th>Degree</th>
                <th>Passing Year</th>
                <th>Result</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($educationList as $education)
            {{-- <p>Education: {{ $education->Institute_name }}</p>
            <p>Institution: {{ $education->degree }}</p> --}}
            <tr>
                <td>{{ $education->Institute_name }}</td>
                <td>{{ $education->degree }}</td>
                <td>{{ $education->passing_year }}</td>
                <td>{{ $education->result }}</td>
            </tr>
        @endforeach
        </tbody>
            </table>
        </div>
    </section>
            </div>
            <div class="card my-5">
                <h5 class="card-header text-white" style="background-color: #0d437cbd;">
               Declaration
                </h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <span class="v_label">File Name</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label label-success label_tracking_no">{{ $students->file_name }}</span>
                        </div>
                        <div class="col-md-3">
                            <span class="v_label">Sign</span>
                        </div>
                        <div class="col-md-3">
                            <span class="label"><img src="{{ asset('images/' . $students->sign) }}" style="height:150px"; width="150px"></span>
                        </div>
                        <div class="col-sm-5 form-check">
    <label class="form-check-label" for="gridCheck">
        <input class="form-check-input" type="checkbox" id="gridCheck" name="terms"  {{ $students->terms === 1 ? 'checked' : '' }} disabled>
        I do hereby declare that the information given above is true.
    </label>
</div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



        <!-- Bootstrap JS link -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> --}}
    </body>
</html>
