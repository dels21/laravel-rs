<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Sidebar Styling --}}
    <!-- Favicons -->
    <link href="sidebar-assets/img/favicon.png" rel="icon">
    <link href="sidebar-assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="sidebar-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="sidebar-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="sidebar-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="sidebar-assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="sidebar-assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="sidebar-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="sidebar-assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="sidebar-assets/css/sidebar-style.css" rel="stylesheet">
    <link href="root/root.css" rel="stylesheet">
    {{-- End Sidebar Styling --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @include('root.sidebar-dokter')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
