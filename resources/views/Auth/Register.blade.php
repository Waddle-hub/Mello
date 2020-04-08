@extends('Layout.Master')

@section('content')
    
<div class="w-50 mx-auto">
    <form action="{{ route("register") }}" method="POST">
        @csrf 
        
        <div class="row">
            <div class="col">

        <div class="row">
            <div class="col">

                <div class="form-group">

                    <label for="password">Password</label>
                    <input id="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ' '}}" type="text" name="password">
                    @if ($errors->has('password'))
                      @foreach ($errors->get('password') as $error)
                        <p class="invalid-feedback">{{$error}}</p>
                      @endforeach
                    @endif
          
                </div>

            </div>
            <div class="col">

                <div class="form-group">

                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ' '}}" type="text" name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                      @foreach ($errors->get('password_confirmation') as $error)
                        <p class="invalid-feedback">{{$error}}</p>
                      @endforeach
                    @endif
          
                </div>

            </div>
        </div>

        <div class="form-group">

            <label for="username">User name</label>
            <input id="username" class="form-control {{$errors->has('username') ? 'is-invalid' : ' '}}" type="text" name="username">
            @if ($errors->has('username'))
              @foreach ($errors->get('username') as $error)
                <p class="invalid-feedback">{{$error}}</p>
              @endforeach
            @endif

        </div>

        <div class="form-group">

            <label for="email">Email</label>
            <input id="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ' '}}" type="text" name="email">
            @if ($errors->has('email'))
              @foreach ($errors->get('email') as $error)
                <p class="invalid-feedback">{{$error}}</p>
              @endforeach
            @endif

        </div>

        <div class="form-group">
            <button class="btn btn-outline-light" type="submit">Register</button>
        </div>
    </form>
</div>

@endsection