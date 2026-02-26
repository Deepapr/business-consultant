@extends('layouts.app')

@section('title', 'Book a Consultation | Business Consulting')
@section('meta_description', 'Book a professional business consultation with our expert team.')

@section('content')
<div class="container section">
    <h1>Book a Consultation</h1>
    @if(session('success'))
        <div style="background:#e6ffed;color:#207245;padding:16px 24px;border-radius:6px;margin-bottom:24px;">
            {{ session('success') }}
        </div>
    @endif
    <form method="POST" action="{{ route('consultation.submit') }}" style="max-width:600px;margin:0 auto;background:#fff;padding:32px 24px;border-radius:8px;box-shadow:0 2px 8px rgba(10,35,66,0.07);">
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
        <div style="margin-bottom:20px;">
            <label for="service_id" style="font-weight:600;">Service</label>
            <select id="service_id" name="service_id" class="form-control" required style="width:100%;padding:10px;margin-top:6px;">
                <option value="">Select a service</option>
                <option value="1">Strategy Consulting</option>
                <option value="2">Operations Improvement</option>
                <option value="3">Digital Transformation</option>
            </select>
        </div>
        <div style="margin-bottom:20px;display:flex;gap:16px;">
            <div style="flex:1;">
                <label for="preferred_date" style="font-weight:600;">Preferred Date</label>
                <input type="date" id="preferred_date" name="preferred_date" class="form-control" required style="width:100%;padding:10px;margin-top:6px;">
            </div>
            <div style="flex:1;">
                <label for="preferred_time" style="font-weight:600;">Preferred Time</label>
                <input type="time" id="preferred_time" name="preferred_time" class="form-control" required style="width:100%;padding:10px;margin-top:6px;">
            </div>
        </div>
        <div style="margin-bottom:24px;">
            <label for="requirements" style="font-weight:600;">Project Requirements</label>
            <textarea id="requirements" name="requirements" class="form-control" rows="4" style="width:100%;padding:10px;margin-top:6px;"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">Submit Consultation Request</button>
    </form>
</div>
@endsection
