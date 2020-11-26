@if ($errors->any())
    @if($errors->first('alert-success'))
    <div class="alert alert-success alert-dismissible">
        <p>{{ $errors->first('alert-success') }}</p>
    </div>
    @else
        <div class="alert alert-danger alert-dismissible">
            <ul>
                @foreach ($errors->all() as $error) {{-- For validation Err msgs --}}
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endif