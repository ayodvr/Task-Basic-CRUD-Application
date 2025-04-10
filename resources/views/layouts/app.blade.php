<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
    <style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css');

        .navbar {
            border: 0;
            padding: 0 15px;
        }
        .navbar li {
            padding: .5rem 0;
            border-bottom: 2px solid #343a40;
        }
        .navbar li.active {border-color: #dc3545;}
        .session-box .box {
            font-size: 13px;
            padding: 20px;
            border: 2px solid #eee;
            border-bottom: 1px;
        }
        .session-box .box:last-child {
            margin-bottom: 20px;
            border-bottom: 2px;
        }
        .session-box .box:nth-child(odd) {background: #eee}
        .session-box .media-object p {color: #03A9F4;}
        .sm-avatar h6 {font-size: 12px;}
        .sm-avatar p {font-size: 11px;}
        .sm-avatar img {
            width: 40px;
            width: 40px;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <a class="navbar-brand" href="/">Task App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>



