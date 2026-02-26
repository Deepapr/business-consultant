@extends('layouts.app')

@section('title', 'Home | Business Consulting')
@section('meta_description', 'Professional business consulting services. Book a consultation today!')

@section('content')
<div class="hero-section">
    <div class="container">
        <h1 class="hero-title">Empowering Your Business Success</h1>
        <p class="hero-subtitle">Expert consulting services to help you grow, innovate, and lead in your industry.</p>
        <a href="{{ route('consultation.show') }}" class="btn btn-primary">Book a Consultation</a>
    </div>
</div>

<div class="company-overview section">
    <div class="container">
        <h2>About Our Company</h2>
        <p>We are a team of experienced consultants dedicated to delivering tailored solutions for your business challenges. Our expertise spans strategy, operations, digital transformation, and more.</p>
    </div>
</div>

<div class="service-highlights section">
    <div class="container">
        <h2>Our Services</h2>
        <div class="services-list">
            <!-- Example service cards, replace with dynamic content if needed -->
            <div class="service-card">
                <h3>Strategy Consulting</h3>
                <p>Develop actionable strategies to achieve your business goals.</p>
            </div>
            <div class="service-card">
                <h3>Operations Improvement</h3>
                <p>Optimize processes and boost efficiency across your organization.</p>
            </div>
            <div class="service-card">
                <h3>Digital Transformation</h3>
                <p>Leverage technology to drive innovation and growth.</p>
            </div>
        </div>
    </div>
</div>

<div class="cta-section section">
    <div class="container">
        <a href="{{ route('consultation.show') }}" class="btn btn-primary btn-lg">Schedule Your Consultation</a>
    </div>
</div>
@endsection
