<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> @yield('title','Made Your Booking')</title>
</head>
<body>
<div class="bg-info container-fluid h-100">
    <div class="container">
        <div class="bg-light p-3">
            <h1 class="text-center"> Booking System</h1>

        <div class="card">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link @yield('Appointment', '')">Appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('Employee', '')">Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('Day', '')">Day</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  @yield('Time', '')">Time</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" @yield('Confirm', '')>Confirm details</a>
                </li>
            </ul>
        </div>
        </div>
        <div class="text-white p-2 m-2">
            @yield('content')
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
