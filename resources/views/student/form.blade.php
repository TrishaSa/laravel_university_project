@extends('frontend.layouts.master')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
@section('plugin_style')
@endsection

@section('style')
    <style>
        body {
            background-image: url("/assets/images/approval.svg");
        }

        .link_list a {
            font-size: 20px;
            color: #4c4545;
            border-bottom: solid rgb(194 169 169 / 74%) 1px;
            line-height: 1.5rem;
            margin-bottom: 30px;
        }

        hr {
            border: solid #007bff 2px;
        }

        .nfis-sec-title {
            text-align: center;
        }

        @media (min-width: 1200px) {
            .container-md {
                max-width: 1170px;
            }
        }

        @media (min-width: 1450px) {
            .container-md {
                max-width: 1280px;
            }

        }

        @media (min-width: 1680px) {
            .container {
                max-width: 1320px;
            }

            .container {
                max-width: 1400px;
            }

        }

        .input {
            border: none;
            border-radius: none !important;
            border-bottom: solid #007bff 2px;
        }

        .nfis-ring-desc {
            font-size: 20px;
            line-height: 1.4;
            font-weight: 400;
            margin-bottom: 0;
            padding-top: 5px;
        }

        .form-group label {
            color: #394452;
            font-size: 16px;
            line-height: 1.2;
            margin-bottom: 5px;
        }

        .career {
            border: solid #007bff 2px;
        }

        button {
            text-align: center;
        }
    </style>
@endsection

@section('content')
    {{-- <section class="container">
        <div class="nfis-sec-title">
            <h2>Important Link</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
             @if ($links->toArray()) 
              <div class="row">
                @foreach ($links as $single_link)
                <div class="col-md-6 d-flex link_list">
                   <i class="fas fa-link mr-2"></i>
                   <a href='{{$single_link->important_link??null}}' target='_blank'>{{ languageStatus() == 'en' ? ($single_link->title_en??null) : ( $single_link->title_bn??null) }}</a>
                </div>
                @endforeach
              </div>
              @endif
            </div>
            <div class="col-md-2"></div>     
        </div>
        <div class="d-flex justify-content-centermx-3">
            {!! $links->links() !!}
        </div>
    </section> --}}

    <section class="container">
        <div class="nfis-sec-title">
            <h2 class="mb-3">Application Form</h2>
            <hr>
        </div>
        <div class="container-md">
            <div class="nfis-sec-bdr-title">
                <h3 class="title-text">Personal Information</h3>
            </div>
            <form class="ml-5 mt-4" action="{{ url('/important-link-store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-md-5 mb-3 mx-3">
                        <label for="validationDefault01"> Name</label>
                        <input type="text" class="form-control input" id="validationDefault01" 
                            name="name" required>
                    </div>
                    <div class="col-md-5 mb-3 mx-3">
                        <label for="validationDefault02">Phone</label>
                        <input type="text" class="form-control input" id="validationDefault02" 
                            name="phone" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-5 mb-3 mx-3">
                        <label for="validationDefault02">NID</label>
                        <input type="text" class="form-control input" id="validationDefault02" 
                            name="NID" required>
                    </div>
                    <div class="col-md-5 mb-3 mx-3">
                        <label for="inputDob" class="form-label">Dob</label>
                        <input type="date" class="form-control input" name="dob" id="inputAddress">
                    </div>

                </div>
                <div class="form-row ">
                    <div class="col-md-5 mb-3 mx-3">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control input" name="email" id="inputEmail4"
                            placeholder="Email">
                    </div>
                    <div class=" col-md-5 mx-3">
                        <div class="form-check-inline" style="margin-top: 30px;">
                            <label class="form-check-label" for="gender">Gender :</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio1" value="Male" name="gender">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio2" value="Female" name="gender">
                            <label class="form-check-label" for="inlineRadio3">Female</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineRadio2" value="Other" name="gender">
                            <label class="form-check-label" for="inlineRadio2">Other</label>
                        </div>
                        <div>
                            <label for="gender" class="error"></label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-5 mb-3 mx-3">
                        <label for="validationDefault02">CV</label>
                        {{-- <input type="text" class="form-control input" id="validationDefault02" value="Otto" required> --}}
                        <label class="btn btn-file text-center">
                            <input type="file" class="form-control-file required" id="file"
                                name="file" accept="application/pdf">
                        </label>
                        <p id="file_name"></p>
                    </div>
                    <div class="col-md-5 mb-3 mx-3">
                        <label for="validationDefault02">Career Objective</label>
                        <textarea id="inputAddress" class="form-control career " name="career"></textarea>
                    </div>

                </div>
        </div>
        <section class="container-md form_2 data_info my-4">
            <div class="nfis-sec-bdr-title">
                <h3 class="title-text">Educational Qualification</h3>
            </div>
            <table class="table table-bordered table-striped table-outlier-primary mt-3">
                <thead>
                    <tr>
                        <th scope="col">Institute Name</th>
                        <th scope="col">Degree</th>
                        <th scope="col">Passing Year</th>
                        <th scope="col">Result</th>
                        <th scope="col">
                            <div class="action_container">
                                <button type="button" class="btn btn-success" onclick="create_tr('table_body')"><i
                                        class="fa-solid fa-plus"></i></button>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody id="table_body">
                    <tr>
                        <td><input type="text" class="form-control" name="institute[]"></td>
                        <td><input type="text" class="form-control" name="degree[]"></td>
                        <td><input type="text" class="form-control" name="year[]"></td>
                        <td><input type="text" class="form-control" name="result[]"></td>
                        <td>
    
                        </td>
                    </tr>
    
                </tbody>
            </table>
        </section>
        <section class="container">
            <div class="nfis-sec-bdr-title">
                <h3 class="title-text">Explain Yourself</h3>
            </div>
            <div class="container-md">
                <div class="row mt-3">
                    <div class="col-md-5 mb-3 mx-3">
                        <label class="nfis-ring-desc pb-3"> 5.1) Rate yourself for this work (Job description mentioned in this
                            circular) <span style="color:red; ">*</span></label> <br>
                        <div class="">
                            <p>
                                <input type="radio" value="1" name="question_5" required>
                                <label>Very good</label>
                            </p>
                            <p>
                                <input type="radio" value="2" name="question_5" required>
                                <label>Good</label>
                            </p>
                            <p>
                                <input type="radio" value="3" name="question_5" required>
                                <label>Average</label>
                            </p>
                            <p>
                                <input type="radio" value="4" name="question_5" required>
                                <label>Don&#039;t know</label>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 mb-3 mx-3">
                        <label class="nfis-ring-desc pb-3"> 5.2) Are you hard-working? <span
                                style="color:red; font-size: 14px;">*</span></label>
                        <br>
                        <div class="f">
                            <p>
                                <input type="radio" value="1" name="question_6" required>
                                <label>Very good</label>
                            </p>
                            <p>
                                <input type="radio" value="2" name="question_6" required>
                                <label>Good</label>
                            </p>
                            <p>
                                <input type="radio" value="3" name="question_6" required>
                                <label>Average</label>
                            </p>
                            <p>
                                <input type="radio" value="4" name="question_6" required>
                                <label>Don&#039;t know</label>
                            </p>
                        </div>
                    </div>
                </div class="container-md">
                <div class="row">
                    <div class="col-md-5 mb-3 mx-3">
                        <label class="nfis-ring-desc pb-3"> 5.3) Your punctuality? <span style="color:red; ">*</span></label>
                        <br>
                        <div class="">
                            <p>
                                <input type="radio" value="1" name="question_7" required>
                                <label>Always late</label>
                            </p>
                            <p>
                                <input type="radio" value="2" name="question_7" required>
                                <label>Frequently late</label>
                            </p>
                            <p>
                                <input type="radio" value="3" name="question_7" required>
                                <label>Sometimes late</label>
                            </p>
                            <p>
                                <input type="radio" value="4" name="question_7" required>
                                <label>Mostly on time</label>
                            </p>
                            <p>
                                <input type="radio" value="5" name="question_7" required>
                                <label>Always on time</label>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 mb-3 mx-3 ">
                        <label class="nfis-ring-desc pb-3"> 5.4) Your problem solving skill? <span
                                style="color:red;">*</span></label> <br>
                        <div class="">
                            <p>
                                <input type="radio" value="1" name="question_8" required>
                                <label>Very good</label>
                            </p>
                            <p>
                                <input type="radio" value="2" name="question_8" required>
                                <label>Good</label>
                            </p>
                            <p>
                                <input type="radio" value="3" name="question_8" required>
                                <label>Average</label>
                            </p>
                            <p>
                                <input type="radio" value="4" name="question_8" required>
                                <label>Don&#039;t know</label>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3 mx-3">
                        <label class="nfis-ring-desc pb-3"> 5.5) Your intellectual curiosity? <span
                                style="color:red;">*</span></label> <br>
                        <div class="">
                            <p>
                                <input type="radio" value="1" name="question_9" required>
                                <label>Very good</label>
                            </p>
                            <p>
                                <input type="radio" value="2" name="question_9" required>
                                <label>Good</label>
                            </p>
                            <p>
                                <input type="radio" value="3" name="question_9" required>
                                <label>Average</label>
                            </p>
                            <p>
                                <input type="radio" value="4" name="question_9" required>
                                <label>Don&#039;t know</label>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <div class="d-flex justify-content-center">
        <button class="btn btn-primary my-5" type="submit">Submit form</button>
    </div>
    </form>
    </div>
    </section>
@endsection

@section('plugin_script')
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

            newRow.lastElementChild.innerHTML =
                `<button type="button" class="btn btn-danger" onclick="removeRow(this)"><i class="fa-solid fa-minus"></i></button>`;

        }

        function removeRow(This) {
            This.closest('tr').remove();
        }
    </script>
@endsection
