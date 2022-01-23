

<form action="{{ route('submit-form') }}" method="post" >
    <div class="row">
    @csrf



    <div class="form-group">
        <label for="domain_name">Please enter you domain name</label>
        <input type="text" value="" name="domain_name" class="form-control" required placeholder="Please enter you domain name">

    </div>

    <br/>
    </div>
    <hr class="mb-4">
    <button type="submit" class="btn btn-primary btn-lg btn-block">Check</button>

</form>
<br/>


@if (\Session::has('success'))
    <div class="alert alert-success">
        {!! \Session::get('success') !!}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            {{ $error }} <br/>
        @endforeach
    </div>
@endif

