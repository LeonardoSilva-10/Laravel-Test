<!DOCTYPE html>
<html>
    <head>
        <title>Contact Management</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ url('contacts') }}">Contact Management</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contacts') }}">Contacts</a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('contacts/create') }}">Add Contact</a>
            </li>
            </ul>
    </nav>
    @yield('content')
    </body>
</html>
