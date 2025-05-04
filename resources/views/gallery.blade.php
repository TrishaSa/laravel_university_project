<style>
    body{
      background-image: url("images/bg-5.jpg");
    }
    .gallery{
  display: flex;
  flex-wrap: wrap;
}
.gallery a{
  position: relative;
  width: 300px;
  height: 300px;
  margin: 10px;
}
.gallery a img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: transform 2s;
    object-fit: cover;
    border-radius: 10px;
}
.gallery a img:hover{
  transform: scale(1.1);
}
h3{
  font-size: 35px;
}
    </style>
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"/>
    </head>
    <body>
      <header>
        @include('nav')
    </header>
    <section class="gallery_section container mt-5 pt-5">
    
    <h3 class="mt-5 text-center">Photo Gallery</h3>
    <div class="gallery mt-3"> 
    <a href="./images/aiubfincompq2302.jpg" class="big" rel="rel1">
      <img src="./images/aiubfincompq2302.jpg" alt="" title="Image 1">
    </a>
    
    <a href="./images/health.jpg" class="big" rel="rel1">
      <img src="./images/health.jpg" alt="" title="Image 2">
    </a>
    
    <a href="./images/aiubsymp2301.jpg" class="big" rel="rel2">
      <img src="./images/aiubsymp2301.jpg" alt="" title="Image 3">
    </a>
    
    <a href="./images/aiubieee2301.png" class="big" rel="rel2">
      <img src="./images/aiubieee2301.png" alt="" title="Image 4">
    </a>
    <a href="./images/aiubbusplan2301.jpg" class="big" rel="rel1">
      <img src="./images/aiubbusplan2301.jpg" alt="" title="Image 1">
    </a>
    
    <a href="./images/aiubfincompq2301.jpg" class="big" rel="rel1">
      <img src="./images/aiubfincompq2301.jpg" alt="" title="Image 2">
    </a>
    
    <a href="./images/aiubfincompq2302.jpg" class="big" rel="rel2">
      <img src="./images/aiubfincompq2302.jpg" alt="" title="Image 3">
    </a>
    
    <a href="./images/business.jpg" class="big" rel="rel2">
      <img src="./images/business.jpg" alt="" title="Image 4">
    </a>
    
    </div>
    </section>
    
    <section class="container form_2 data_info py-2">
      <div>
          <h4 class="p-2 text-white text-center rounded" style="background-color: #0d437cbd;">
              Educational information</h4>
          <table class="table table-bordered mt-5">
              <thead>
                  <tr>
                      <th scope="col">Institute Name</th>
                      <th scope="col">Degree</th>
                      <th scope="col">Passing Year</th>
                      <th scope="col">Result</th>
                      <th scope="col">
                          <div class="action_container">
                              <button type="button" class="btn btn-success"
                                  onclick="create_tr('table_body')"><i
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
      </div>
  </section>
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
     <script>
        lightGallery(document.querySelector(".gallery"));
     </script>
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
    </body>
    </html>

    <section>
      @include('footer')
    </section>
    