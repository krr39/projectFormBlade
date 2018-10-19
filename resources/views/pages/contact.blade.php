@extends('layouts.default')

@section('content')
    <div clas="card mt-3 pl-2 pr-2">
        <div class="card-title"><h1>Contact</h1></div>

        <div class="card-body">

            <form role="form" id="contact-form" class="contact-form"  method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="Name" name="name" placeholder="enter your name" >
                </div>


                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="Email" name="email" placeholder="name@example.com"  >
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

@endsection