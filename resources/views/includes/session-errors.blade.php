@if ($errors->any())
    <div class="alert alert-danger m-3">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (!$errors->any() && session('error'))
    <div class="alert alert-danger m-3" role="alert">
        {{ session('error')}}
    </div>
@endif
