@extends('layouts.app')

@section('title', 'Contact Us | Business Consulting')
@section('meta_description', 'Contact our business consulting team for enquiries and support.')

@section('content')
<div class="container section">
    <h1>Contact Us</h1>
    <p>Have a question or want to discuss your business needs? Fill out the form below and our team will get back to you promptly.</p>
    @if(session('success'))
        <div style="background:#e6ffed;color:#207245;padding:16px 24px;border-radius:6px;margin-bottom:24px;">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('contact.submit') }}" style="max-width:600px;margin:0 auto;background:#fff;padding:32px 24px;border-radius:8px;box-shadow:0 2px 8px rgba(10,35,66,0.07);">
        @csrf
        <div style="margin-bottom:20px;">
            <label for="name" style="font-weight:600;">Name</label>
            <input type="text" id="name" name="name" class="form-control" required style="width:100%;padding:10px;margin-top:6px;">
        </div>
        <div style="margin-bottom:20px;">
            <label for="email" style="font-weight:600;">Email</label>
            <input type="email" id="email" name="email" class="form-control" required style="width:100%;padding:10px;margin-top:6px;">
        </div>
        <div style="margin-bottom:20px;">
            <label for="phone" style="font-weight:600;">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control" style="width:100%;padding:10px;margin-top:6px;">
        </div>
        <div style="margin-bottom:24px;">
            <label for="message" style="font-weight:600;">Message</label>
            <textarea id="message" name="message" class="form-control" rows="4" required style="width:100%;padding:10px;margin-top:6px;"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">Send Message</button>
    </form>
    <div style="margin-top:40px;text-align:center;color:#555;">
        <p><strong>Email:</strong> info@consultingco.com</p>
        <p><strong>Phone:</strong> (123) 456-7890</p>
        <p><strong>Location:</strong> 123 Business Ave, City, Country</p>
    </div>
</div>
@endsection
