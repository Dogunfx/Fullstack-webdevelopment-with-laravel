@extends('layout')

@section('main-section')
<div class="card-row-parent">
    <div class="card-row">
        <h1>Login to admin</h1>

        <p class="message">
            {{ session("message") }}
        </p>


        <form action="auth-admin" method="post">
            @csrf
            <div class="form-group">
                <label for="">Email</label>
                <input name="admin-email" type="email" placeholder="Enter Your email address">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input name="admin-password" type="password" placeholder="Enter Password">
            </div>
            <div class="form-group form-button">
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
</div>
@endsection