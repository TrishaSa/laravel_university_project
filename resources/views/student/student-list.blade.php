<style>
  .bg-body-tertiary{
    background: #420dfd12;
  }
</style>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>students list</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  </head>
  <body>
     <header class="mb-5">
      @include('nav')
    </header>
   <div class="container mt-5 pt-5">
   <div class="d-flex justify-content-between pt-5">
    <h3>Student List</h3>
    @auth
    <a href="{{ url('/studentCreate') }}" class="btn btn-primary">Add new</a>
    @endauth
</div>
<div class="my-4">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">photo</th>
      <th scope="col">view</th>
      @auth
       <th scope="col">edit</th>
       <th scope="col">delete</th>
      @endauth

    </tr>
  </thead>

 
  <tbody class="table-group-divider">
    @php
    $num = count($students);
    $uniqueId = 1;
    @endphp
    @if ($num > 0)
        @foreach ($students as $row)
            <tr>
                <td>{{ $uniqueId }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->phone }}</td>
                <td><img src="{{ asset('images/' . $row->image) }}" style="height:80px; width:80px"></td>
                <td>
                  <a href="{{ url('/studentView', ['id' => $row->id]) }}" class="btn btn-success">View</a>
              </td>
              @auth
                  <td>
                      <a href="{{ url('/studentEdit', ['id' => $row->id]) }}" class="btn btn-warning">Edit</a>
                  </td>
                  <td>
                      <form action="{{ url('/studentDelete', ['id' => $row->id]) }}" method="post" id="deleteForm">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="btn btn-danger" id="deleteButton" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Delete</button>
                      </form>
                  </td>
              @endauth
            </tr>    
                  <div class="modal" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to delete this record?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                        </div>
                      </div>
                    </div>
                  </div>
           
            @php
            $uniqueId++;
            @endphp
        @endforeach
    @endif
</tbody>
</div>
</div>
   </div>
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>  
$(document).ready(function () {
    $('.table').DataTable();
});
    </script>
 <script>
  $(document).ready(function () {
      // Handle click event of the delete button
      $("#deleteButton").on("click", function () {
          $("#confirmDeleteModal").modal("show"); // Show the modal when the button is clicked
      });

      // Handle click event of the confirm delete button in the modal
      $("#confirmDelete").on("click", function () {
          $("#deleteForm").submit(); // Submit the form when the user confirms the deletion
      });
  });
</script>

  </body>
</html>
