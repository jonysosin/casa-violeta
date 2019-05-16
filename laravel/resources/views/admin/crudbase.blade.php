<head>
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
</head>
<body class="admin-page">
    @include('admin/partials/header')
    <div class="page-content">
        <div class="content-left">
            @include('admin/partials/sidebar')
        </div>
        <div class="content-right">
            @include('admin/partials/crud')
        </div>
    </div>
    @include('admin/partials/footer')
</body>