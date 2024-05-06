@extends('layouts.app')



@section('styles')

<style>
    .bg-image {
        background-image: url('{{ asset('images/bg-image.webp') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-opacity: 0.5;
    }
</style>

@endsection


@section('content')

<div class="bg-image">
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="row justify-content-center py-5">
            <div class="col-md-8">
                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <h5 class="card-header bg-secondary text-white">Free Content Writing Course Registration</h5>
                    <div class="card-body">
                        <form action="{{ route('form.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your name" required>
                                <label for="name">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="occupation" name="occupation"
                                    placeholder="Your occupation" required>
                                <label for="occupation">Occupation</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="institute" name="institute"
                                    placeholder="Institute">
                                <label for="institute">Institute</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="contact_no" name="contact_no"
                                    placeholder="Contact number" required>
                                <label for="contact_no">Contact No</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number"
                                    placeholder="WhatsApp number">
                                <label for="whatsapp_number">Whatsapp Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="url" class="form-control" id="facebook_profile" name="facebook_profile"
                                    placeholder="Facebook profile link">
                                <label for="facebook_profile">Facebook Profile link</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="reason" name="reason" placeholder="Why are you joining this course?"
                                    rows="3" required></textarea>
                                <label for="reason">Why are you joining this course?</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="url" class="form-control" id="facebook_business_profile"
                                    name="facebook_business_profile" placeholder="Facebook business profile link">
                                <label for="facebook_business_profile">Facebook business profile link</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
