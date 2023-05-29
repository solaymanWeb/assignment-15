@extends('app')

@section('content')
    <section style="padding-top:100px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center pb-3">
                        <h2>Contact Form</h2>
                    </div>
                    <div class="form-container p-3" style="background-color:antiquewhite">
                        <form method="POST" action="{{ route('contact') }}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Enter your name"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter your email"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label>Message</label>
                                        <textarea class="form-control" name="message" cols="10" rows="5"></textarea>
                                    </div>
                                </div>
        
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
