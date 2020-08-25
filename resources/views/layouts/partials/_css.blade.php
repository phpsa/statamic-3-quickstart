@stack('meta')

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet" />
<link href="{{ mix('css/app.css') }}" rel="stylesheet" />

@if (config('app.environment') === 'production')
<!-- Insert analytics code here -->
@endif
