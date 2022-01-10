@if (session('success'))
    <div class="alert alert-success fade-out-alert" role="alert">
        {{ session('success')}}
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success fade-out-alert" role="alert">
        {{ session('status')}}
    </div>
@endif