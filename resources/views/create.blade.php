
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">




  </head>

         <h1 style="text-align: center">Work Data</h1>

         <body>
            <div class="container">

  @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

                <form action="{{ route('store') }}" method="POST">
                  @csrf

                 <label>Name</label>
                 <input type="text" name="name" class="form-control">

                  <label>Email</label>
                  <input type="email" name="email" class="form-control">

                   <label>Role</label>
                   <input type="text" name="role" class="form-control">

                   <label>Salary</label>
                    <input type="number" name="salary" class="form-control">

                    <label>Experience</label>
                    <input type="number" name="experience" class="form-control">

                    <br>

                    <button type="submit"  value="submit" class="btn btn-primary">Submit
                    <button type="back" value="back" class="btn btn-danger">Back



                    </form>
            </div>
        </body>
     </html>


     <style>
      .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20rem; }
      .toggle.ios .toggle-handle { border-radius: 20rem; }
    </style>
    <input type="checkbox" checked data-toggle="toggle" data-style="ios">
    <!-- Android Style: No radius -->
    <style>
      .toggle.android { border-radius: 0px;}
      .toggle.android .toggle-handle { border-radius: 0px; }
    </style>
    <input type="checkbox" checked data-toggle="toggle" data-style="android" data-onstyle="info">

