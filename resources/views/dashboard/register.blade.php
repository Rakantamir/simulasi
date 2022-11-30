@extends('layout')
@section('content')
        <div class="container">
          <p>Register</p>
          @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="logreg" method="POST" action="{{route('register.post')}}"> 
                @csrf
                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Nama</label>
                <br>
                <input name="name" type="text">
                <br>
                <label>Email</label>
                <br>
                <input name="email" type="email">
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="password">
                <br>
                <button type="submit">Log in</button>
                <p> Sudah Punya Akun?
                    <a href="/">Login di sini</a>
                 </p>
            </form>
        </div>     
        @endsection('content')