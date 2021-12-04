@if (session('success'))
    <div class="alert alert-success fade-out-alert" role="alert">
        {{ session('success') }}
    </div>
@endif 