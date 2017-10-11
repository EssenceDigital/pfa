@if(Session::has('success'))

    <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered" role="alert">
        <strong>Success! </strong>{{ Session::get('success') }}
    </div>

@endif

@if(Session::has('error'))

    <div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered" role="alert">
        <strong>Oh snap! </strong>{{ Session::get('error') }}
    </div>

@endif

@if(count($errors) > 0)

    <div class="alert alert-danger alert-styled-left alert-bordered" role="alert">
        <strong>Oh snap! A problem was encountered </strong> <br>
        <ul>
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>

@endif