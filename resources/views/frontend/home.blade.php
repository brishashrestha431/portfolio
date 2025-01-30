@extends('main')

@section('content')

    <div class="main-content">
        <section class="home section">
            <div class="container">
                <div class="row">
                    <div class="home-info">
                        <h1 class="hello">Hello, my name is <span class="name">Brisha Shrestha</span></h1>
                        <h3 class="my-profession">I'm a <span class="typing">full stack developer</span></h3>
                        <p>A passionate Full-Stack Developer specializing in PHP & Laravel. I build high-performance, scalable, and user-friendly web applications. With a strong foundation in both front-end and back-end technologies, I bring ideas to life with clean, efficient, and maintainable code.</p>
                        <a href="#contact" class="btn hire-me">Hire Me</a>

                        <div class="social-links">
                            <a href="https://instagram.com/YourInstagram" target="_blank" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://github.com/YourGitHub" target="_blank" class="social-link">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://linkedin.com/in/YourLinkedIn" target="_blank" class="social-link">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://twitter.com/YourTwitter" target="_blank" class="social-link">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="mailto:shresthabrisha0232@gmail.com" class="social-link">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                    <div class="home-img">
                        <img src="{{ asset('assets/images/pp.jpg')}}" alt="Brisha Shrestha">
                    </div>
                </div>
            </div>
        </section>

        @endsection
