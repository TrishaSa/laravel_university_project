<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style> 
 .Scholarship,.admission,
 .tuition,.programs{
  padding: 25px 17px 17px;
  z-index: 111;
  position: relative;
  top: -50px;
  border-radius: 5px;
}
.notice-analysis-label {
    width: 420px;
    height: 75px;
    background-color: #fefefe;
    border-left: 5px solid #052e59;
    box-shadow: 10px 10px 5px #aaaaaa;
    border-radius: 6.02291px;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 10px;
}
.faculty{
  border: none;
}
.faculty:hover{
  top: -20px;
}
.event-sec{
  background-image: url("images/bg_patternSquiresOp.png");
  background-attachment: fixed;
}
.faculties{
  background-image: url("images/cubes.png");
  background-attachment: fixed;
}
.facts{
  background-image: url("images/playground_stadium.jpg");
  background-attachment: fixed;
  background-size: cover;
}
.facts-figures{
  padding: 70px 0;
}
.facts-figures h1 {
  font-size: 80px;
  font-weight: bold;
}
h3{
  font-size: 35px;
}
</style>

</head>
<body>
    <header>

        @include('nav')

          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/banner-4.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h4 class="mb-5">Passage Between Annex - 2 & Annex - 3</h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/banner-10.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h4 class="mb-5">Entrance of Sports Gallery</h4>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/banner-3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h4 class="mb-5">Aerial View of AIUB Campus</h4>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    </header>
    <section class="container">
    <div class="card-group ">
        <div class="card programs py-5" style="  background-color: #052e59; color: azure;">
        <div class="text-center">
        <i class="fa-solid fa-file-shield fa-2xl"></i>       
      </div>            
       <div class="card-body text-center">
            <h5 class="card-title py-2">Programs</h5>
            <p class="card-text py-2">We are offering 38 undergraduate and graduate programs under 26 departments. Our curriculum is designed to help the students to develop the skills required for 21st-century employment.</p>
          
          </div>
        </div>
        <div class="card admission py-5" style="background-color: #2E3094; color: azure;">
       <div class="text-center">
       <i class="fa-solid fa-graduation-cap fa-2xl"></i>
       </div>
          <div class="card-body text-center">
            <h5 class="card-title py-2">Admission</h5>
            <p class="card-text py-2">We have students coming from different backgrounds, cultures, and nationalities as well. More than 500 international students are enrolled in various programs.</p>
          
          </div>
        </div>
        <div class="card tuition py-5" style="background-color: #052e59; color: azure;">
        <div class="text-center">
        <i class="fa-solid fa-sack-dollar fa-2xl"></i>       
      </div>
            <div class="card-body text-center">
            <h5 class="card-title py-2">Tuition Fees</h5>
            <p class="card-text py-2">We offer affordable tuition fees for students with the option to pay them in multiple installments to create convenience for students.</p>
          
          </div>
        </div>
        <div class="card Scholarship py-5" style="background-color: #2E3094; color: azure;">

        <div class="text-center">
        <i class="fa-solid fa-user-graduate fa-2xl"></i>     
       </div>        
      <div class="card-body text-center">
            <h5 class="card-title py-2">Scholarship</h5>
            <p class="card-text py-2">We make sure all our students get the help they need to complete the degree. Scholarships are available for students with excellent academic results as well as for the students who are struggling financially.</p>
          
          </div>
    </section>

    <section class="container-fluid notice-analysis">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pt-5 pb-5">
                    <div class="pb-3">
                        <h3 class="fw-semibold">Notice</h3>
                    </div>
                    <div class="col-md-12 p-4">
                      <div class="notice-analysis-label">
                        <div class="label">
                            <p>FBA INTERNSHIP STUDENTS VIVA DATE & TIME: SPRING 2022-2023 </p>
                        </div>
                    </div>

                    <div class="notice-analysis-label">
                        <div class="label">
                            <p>FBA Set B Notice for Final Examination 2022-2023</p>
                        </div>
                    </div>

                    <div class="notice-analysis-label">
                        <div class="label">
                            <p>Admission Fees for Summer 22-23 (Slot-1) </p>
                        </div>
                    </div>
                    <div class="notice-analysis-label">
                        <div class="label">
                            <p>Admission Final Result of Summer 22-23 (Slot-1)  </p>
                        </div>
                    </div>
                    <div class="notice-analysis-label">
                        <div class="label">
                            <p>City Alo Certification Program  </p>
                        </div>
                    </div>
                    </div>

                </div>
                <div class="col-12 col-md-6 pt-5 pb-5">
                    <div class="notice-analysis-info">
                        <div class="pb-3">
                            <h3 class="fw-semibold">Message from Chairman</h3>
                        </div>
                        <article class="col-md-12 p-4">
                            <div>
                                <img alt="Message From The Chairman" class="img-thumbnail img-fluid" src="{{ asset('images/mr.-ishtiaque-abedin-sir-chairman.jpg') }}" style="float:left; height:200px; margin:0px 15px 10px 0px; width:200px">
                            </div>
                            <p style="text-align: justify;">The progress of the American International University – Bangladesh (AIUB) has been a matter of true honor and great pride to witness. 
                                We have come a long way since we started off with just 4 rented-classrooms and 7 students – today, we boast a diverse talented pool of 
                                over 10, 000 students, with a steady growth in intake every semester, gaining national and international recognition and acknowledgement 
                                on various fields across the academic and administrative boards, operating on a full-scale on our very own premises with fully equipped 
                                classrooms and state-of-the-art facilities sprawled over 12 acres that has become one of the most photographed campus in the country. 
                                It gives you a sense of belonging, yet with a commitment to strive for greatness and to aim for more. As one of the established private 
                                universities in Bangladesh, our journey has not only seen prized accomplishments, but challenges and uncertainty as well.</p>                            
                            <p><strong>Mr. Ishtiaque Abedin</strong><br>
                            Chairman, Board of Trustees<br>
                            American International University-Bangladesh (AIUB)</p>
                            </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="event-sec py-2"> 
     <div class="container mb-5">
      <div class=" text-center py-3">
        <h3 class="my-4 fw-bold">Recent Events</h3>
        <p>Life at AIUB is very much eventful. Through a lot of meaningful and <br> impactful events students get the
        opportunity to develop their skills and portfolio beyond the curriculam</p>
    </div>
      <div class="row row-cols-1 row-cols-md-3 g-4" style="text-align: justify;">
        <div class="col ">
          <div class="card event-body h-100">
            <img src="images/aiubsymp2301.jpg" class="card-img" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-semibold">Faculty Members Attended International Symposium</h5>
              <p class="card-text">On May 11-12, 2023, faculty members from American International University-Bangladesh (AIUB) attended the “International Symposium on Quality Assurance in Engineering Education through Accreditation – III” organized by the Board of Accreditation for Engineering & Technical Education (BAETE) under The Institution of Engineers, Bangladesh (IEB). </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card event-body h-100">
            <img src="images/aiubieee2301.png" class="card-img" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-semibold">Workshop on "Microwave Antenna Design and Simulation"</h5>
              <p class="card-text">On 20th April 2023, the IEEE Microwave Theory and Techniques Society AIUB SB Chapter, in collaboration with the IEEE AIUB Student Branch, organized an online workshop titled "Microwave Antenna Design and Simulation". This workshop began at 02:00 pm with more than 100 attendees. The workshop aimed to provide a comprehensive overview of microwave antenna design and its simulation.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card event-body h-100 ">
            <img src="images/aiubfincompq2302.jpg" class="card-img" alt="...">
            <div class="card-body">
              <h5 class="card-title fw-semibold">Financial Accounting Quiz Competition</h5>
              <p class="card-text">The Department of Accounting, Faculty of Business Administration, organized a quiz competition for the students of Financial Accounting course on April 12, 2023 [Wednesday]. It was an inclusive competition covering all the students of Financial Accounting course (freshman students).</p>
            </div>
          </div>
        </div>
      </div>
     </div>
    </section>
   <section class="facts">
    <div class="container ">
    <h3 class="pt-5 text-white fw-bold">Facts and Figures</h3>
    <div class="row facts-figures">
    <div class="col-md-3">
                    <h1 class="text-center text-white">4</h1>
                    <h4 class="text-center text-white">Faculties</h4>
                </div>
                <div class="col-md-3">
                    <h1 class="text-center text-white">19</h1>
                    <h4 class="text-center text-white">Academic Programs</h4>
                </div>
                <div class="col-md-3">
                    <h1 class="text-center text-white">36,911</h1>
                    <h4 class="text-center text-white">Total Graduates</h4>
                </div>
                <div class="col-md-3">
                    <h1 class="text-center text-white">21</h1>
                    <h4 class="text-center text-white">Convocations</h4>
                </div>
    </div>
    </div>
   </section>
    <section class="faculties"> 
      <div class=" container py-5">
      <h3 class="mb-5 text-center fw-bold">Our Faculties</h3>
<div class="row row-cols-1 row-cols-md-4 g-4">
<div class="col-3">
<div class="card faculty" style="width: 18rem;">
  <img src="images/team-img2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title text-center fw-bold">John Travolta</h5>
    <p class="card-text text-center">Head Master</p>
    <div class="d-flex justify-content-evenly">
    <button type="button" class="btn btn-success"><i class="fa-brands fa-facebook"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-square-twitter"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-instagram"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-google-plus-g"></i></button>
  </div>  </div>
</div>
</div>
<div class="col-3">
<div class="card faculty" style="width: 18rem;">
  <img src="images/team-img1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title text-center fw-bold">Kevin Spacey</h5>    
  <p class="card-text text-center">Assistance Teacher</p>
  <div class="d-flex justify-content-evenly">
    <button type="button" class="btn btn-success"><i class="fa-brands fa-facebook"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-square-twitter"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-instagram"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-google-plus-g"></i></button>
  </div>  </div>
</div>
</div>
<div class="col-3">
<div class="card faculty" style="width: 18rem;">
  <img src="images/team-img3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title text-center fw-bold">Jalal Uddin</h5>    
  <p class="card-text text-center">Teacher</p>
  <div class="d-flex justify-content-evenly">
    <button type="button" class="btn btn-success"><i class="fa-brands fa-facebook"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-square-twitter"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-instagram"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-google-plus-g"></i></button>
  </div>  </div>
</div>
</div>
<div class="col-3">
<div class="card faculty" style="width: 18rem;">
  <img src="images/team-img4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center fw-bold">Johan Islam</h5>
    <p class="card-text text-center">Teacher</p>
  <div class="d-flex justify-content-evenly">
    <button type="button" class="btn btn-success"><i class="fa-brands fa-facebook"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-square-twitter"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-instagram"></i></button>
    <button type="button" class="btn btn-success"><i class="fa-brands fa-google-plus-g"></i></button>
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
  
    <script src="https://kit.fontawesome.com/2b14fa03a7.js" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> --}}
</body>
</html>