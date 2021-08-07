@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Woops! Something went wrong!</strong>

        <br><br>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}
            @endforeach
        </ul>
    </div>
@endif