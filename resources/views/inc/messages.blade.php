@if(session('success'))
    <div class="alert alert-success">
        <div class="alert-child">{{ session('success') }}</div>
    </div>
@endif

@if(session('busy'))
    <div class="alert alert-danger">
        <div class="alert-child">{{ session('busy') }}</div>
    </div>
@endif