@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin">
            <form>
                <h1 class="h3 mb-3 fw-normal text-center"> Please Register</h1>
                <div class="form-floating rounded-top">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating rounded-bottom">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">
                Already Registered?
                <a href="/login" class="">
                   Login
                </a>
            </small>
        </main>
    </div>
</div>


@endsection