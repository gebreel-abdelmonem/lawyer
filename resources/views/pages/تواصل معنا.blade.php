@extends('layouts.app')

@section('title')
تواصل معنا
@endsection

@section('content')


<section class="contact">
    <h2>تواصل معنا</h2>

    <div class="contact-container">
<a href="https://wa.me/+201500000496" target="blank">
    <div class="contact-card">
        <i class="fab fa-whatsapp"></i>
        <h3>WhatsApp</h3>
        <p>Chat with us on WhatsApp</p>
    </div>
</a> 

<a href="tel:+201500000496" target="blank">
    <div class="contact-card">
        <i class="fas fa-phone"></i>
        <h3>Phone</h3>
        <p>Call us directly</p>
    </div>
</a>

<a href="https://www.facebook.com/share/17DQ4eSmR5/?mibextid=wwXIfr" target="blank">
    <div class="contact-card">
        <i class="fab fa-facebook"></i>
        <h3>Facebook</h3>
        <p>Visit our Facebook page</p>
    </div>
</a>

<a href="mailto:Mo7ammed3ammar@gmail.com" target="blank">

    <div class="contact-card">
        <i class="fas fa-envelope"></i>
        <h3>Email</h3>
        <p>Send us an email</p>
    </div>
</a>
    
<a href="" target="blank">
    <div class="contact-card">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Location</h3>
        <p>Find us on Google Maps</p>
    </div>
</a>

    </div>
</section>


@endsection