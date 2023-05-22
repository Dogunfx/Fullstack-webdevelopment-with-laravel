@extends('layout')

@section('main-section')
<div class="card-row-parent">
    <div class="card-row">
        <h1>Register for an Exam</h1>
        <form action="register-new-user" method="post">
            @csrf
            <div class="form-group">
                <label for="">Fullname</label>
                <input name="customer-name" type="text" placeholder="Enter Your Fullname">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input name="customer-email" type="email" placeholder="Enter Your email address">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input name="customer-phone" type="phone" placeholder="Enter Phone">
            </div>

            <div class="form-group">
                <label for="">Select An Exam</label>
                <select name="customer-exam-type">
                    <option value="">ETS</option>
                    <option value="">TOFLE</option>
                    <option value="">PERSON VUE</option>
                    <option value="">ICM</option>
                </select>
            </div>

            <div class="form-group form-button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</div>
@endsection