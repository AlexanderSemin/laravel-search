<form action="{{ route('submit-form') }}" method="post" >
{{--<form action="" method="post" >--}}
    @csrf
    <div class="form-group">

        <input type="text" value="" name="domain_name" class="form-control" placeholder="Please enter you domain name">
        <label for="domain_name">Please enter you domain name</label>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <button type="submit" class="btn btn-primary">Check</button>
</form>
<br/>

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
