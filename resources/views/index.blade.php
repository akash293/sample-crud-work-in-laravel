<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

     <script src="
     https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/js/jquery.dataTables.min.js
     "></script>
     <link href="
     https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/css/jquery.dataTables.min.css
     " rel="stylesheet">

<style>

     html {
        box-sizing: border-box;
      }

      * {
        box-sizing: inherit;
      }

      body {
        padding: 2em;
      }

      ul {
        list-style: none;
      }

      label {
        cursor: pointer;
      }

      ul, li {
        margin: 0;
        padding: 0;
      }

      li {
        padding: 0.5em;
      }

      .filters {
        width: 250px;
        box-shadow: 0 0 0.5em 0 rgba(0,0,0,0.3);
        padding: 1.5em;
        position: absolute;
      }

      .filters__list li {
        display: flex;
        align-items: center;
        user-select: none;
        padding-bottom: 1em;
        line-height: 0;
      }

      .filters__list li:last-child {
        padding-bottom: 0;
      }

      input[type="checkbox"] {
        margin-right: 0.5em;
      }

      .filters:not(.filters--active) {
        display: none;
      }

      .button {
        background:blue;
        padding: 1em 2em;
        text-transform: uppercase;
        font-weight:100;
        letter-spacing: 0.05em;
        border: 0;
        outline: 0;
        text-align: left;
        min-width: 50px;
        display: inline-flex;
        justify-content: space-between;
        color: #f5f5f5;
        cursor: pointer;
      }

      .button::after {
        font-family: sans-serif;
        content: "▼";
        padding-left: 0.2em;
      }

      .button--highlight::after {
        content: "✓";
      }

    </style>


     <div class="container">



    <label>Search</label>

    <input type="text" id="search" class="form-control" oninput="filterNames()">

    <br>

    <a href="{{ route('create') }}" class="btn btn-success">Add user</a>

    <br>
    <br>
    <br>


    <button id="toggle-filter-button" class="button">Toggle Filter</button>
    <div id="filter-container" class="filters">


      <ul class="filters__list">
        <li>
      <input id="f1" type="checkbox" />
        <label for="f1">Filter 1</label>
        </li>
            <li>
      <input id="f2" type="checkbox" />
        <label for="f2">Filter 2</label>
        </li>
            <li>
      <input id="f3" type="checkbox" />
        <label for="f3">Filter 3</label>
        </li>
            <li>
      <input id="f4" type="checkbox" />
        <label for="f4">Filter 4</label>
        </li>
            <li>
      <input id="f5" type="checkbox" />
        <label for="f5">Filter 5</label>
        </li>

      </ul></div>



    <table class="table table-bordered">

        <thead>

            <ul id="userList">

            <th>S.no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Salary</th>
            <th>Experience</th>
            </ul>
        </thead>

            <tbody>


                @php
                    $i=1;
                @endphp

                @foreach ($data as $data )


                        <tr class="list-item">

                        <td>{{ $i++ }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->role }}</td>
                        <td>{{ $data->salary }}</td>
                        <td>{{ $data->experience }}</td>

                        <td><a href="{{ route('edit', ['id' => $data->id]) }}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{ route('delete', ['id' => $data->id]) }}" class="btn btn-dark">delete</a></td>
                        </tr>
                     @endforeach
                    </div>
                </body>
                </html>
            </div>


            <script>
                function filterNames() {
                    // Get the input value and convert to lowercase
                    var input = document.getElementById('search').value.toLowerCase();

                    // Get all list items (table rows in this case)
                    var rows = document.getElementsByClassName('list-item');

                    // Loop through the rows
                    for (var i = 0; i < rows.length; i++) {
                        var name = rows[i].getElementsByTagName('td')[1].innerText.toLowerCase();

                        // Check if the name contains the input value
                        if (name.startsWith(input)) {
                            rows[i].style.display = 'table-row';
                        } else {
                            rows[i].style.display = 'none';
                        }
                    }
                }

var button = document.getElementById("filter-button");
var container = document.getElementById("filter-container");
var input = document.querySelectorAll("input");

button.onclick = function (e) {
  e.stopPropagation();
  if (container.classList.contains("filters--active")) {
    container.classList.remove("filters--active");
  } else {
    container.classList.add("filters--active");
  }
};

container.onclick = function (e) {
  e.stopPropagation();
};

window.onclick = function () {
  container.classList.remove("filters--active");
};

console.log(input);

for (var i = 0; i < input.length; i++) {
  var currentInput = input[i];

  currentInput.onclick = function () {
    var isChecked = false;
    for (var j = 0; j < input.length; j++) {
      if (input[j].checked) {
        isChecked = true;
        break;
      }
    }

    if (isChecked) {
      button.classList.add("button--highlight");
    } else {
      button.classList.remove("button--highlight");
    }
  };
}




            </script>







<h1 style="text-align: center">Laravel Toastr Notification<h1>

    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body class="antialiased">
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>
</html>
