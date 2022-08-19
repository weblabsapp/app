@if(session()->has('messages'))
    @foreach(session('messages') as $type => $message)
        <div class="alert alert-{{ $type }}">
            {{ $message }}
        </div>
    @endforeach
@endif