@extends('main')
@section('content')
<section class="contact" id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Feel free to reach out to us! We are here to help.</p>

        <form action="#" method="POST" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" required placeholder="Write your message"></textarea>
            </div>
            <button type="submit" class="btn">Send Message</button>
        </form>
    </div>
</section>
@endsection
