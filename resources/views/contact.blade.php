@extends('layout')

@section('main-section')
<main>
    <div class="card-row-parent">
        <form action="send-contact" method="post">
            @csrf
            <div class="card-row">
                @auth
                <a href="show-contact-list">See all contacts</a>
                @endauth
                <h1>Contact </h1>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" placeholder="Enter Address" name="address" required>
                </div>

                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" placeholder="Phone Number" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" placeholder="someone@email.com" name="email" required>
                </div>


                <div class="form-group">
                    <label for="">How may we help you</label>
                    <textarea name="comment"></textarea>
                </div>
                <div class="form-group form-button">
                    <input type="submit" value="Send Infomation">
                </div>
            </div>
        </form>
    </div>
</main>
@endsection