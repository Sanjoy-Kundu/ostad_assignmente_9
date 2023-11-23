@extends('Frontend.masterlayout.frontend_master')
@section('content')
    <div class="container-fluid" style="background-color: rgb(218, 232, 172)">
    <div class="container p-5">
        <div class="row py-3">
            <div class="col-md-6 word">
                <h2>Hi, I am Sanjoy</h2>
                <h2>I'm a Backend Developer.</h2>
                <p>"I am a seasoned backend developer with a strong proficiency in PHP and Javascipt and expertise in Laravel and Vue. With two years of hands-on experience, I have successfully designed, implemented, and maintained robust server-side architectures for various web applications.</p>
                <button class="btn btn-warning">Hire Me</button>
            </div>
            <div class="col-md-6">
                <div class="img w-75 mx-auto">
                    <img class="w-100" src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dHJhbnNwYXJlbnN0JTIwYm95JTIwcHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- about me section --}}
    <div class="row">
        <h2 class="text-center mb-5 mt-5">About Me</h2>
        <div class="col-md-6">
                <div class="img w-50 mx-auto">
                    <img class="w-100" src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dHJhbnNwYXJlbnN0JTIwYm95JTIwcHJvZmlsZXxlbnwwfHwwfHx8MA%3D%3D" class="img-fluid" alt="">
                </div>
        </div>
        <div class="col-md-6">
            <p>
                I am a skilled Laravel backend developer specializing in crafting robust and scalable web applications. With a solid foundation in PHP & Javascript and extensive experience with the Laravel framework, I have successfully delivered high-quality solutions across various industries. <br> <br>
                My proficiency includes designing and implementing backend architectures, developing RESTful APIs, and optimizing database performance using Laravel Eloquent. I am well-versed in database management systems like MySQL and have a keen eye for creating efficient and maintainable code.
            </p>
            <button class="btn btn-outline-success">Download My CV</button>
            
        </div>
    </div>
    </div>
@endsection


