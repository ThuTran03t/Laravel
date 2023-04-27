<!-- resources/views/form.blade.php -->

<!-- @extends('layouts.app') -->

@section('content')
    <h1>Form</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('submit-form') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of birth</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="url" class="form-control" id="website" name="website" required>
        </div>
        <div>
            @include ('block.error')
</div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if (session('data'))
        <h2>Result</h2>
        <p>Name: {{ session('data.name') }}</p>
        <p>Age: {{ session('data.age') }}</p>
        <p>Date of birth: {{ session('data.dob') }}</p>
        <p>Phone number: {{ session('data.phone') }}</p>
        <p>Address: {{ session('data.address') }}</p>
        <p>Website: {{ session('data.website') }}</p>
    @endif
@endsection
