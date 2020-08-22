@extends('layouts.dashboard')

@section('content')

<style>
    #contact{
    background-color: rgb(239, 239, 239);
    max-width: 1170px;
    margin: auto auto;
    padding: 30px;
    }
</style>

<section id="contact">
    <div>
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div>
                <h2>CONTACT US</h2>
              </div>

                    @if ($message = Session::get('success'))
                  <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert" >×</button>
                      <strong>{{ $message }}</strong>
                  </div>
                    @endif
  
                    @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div> 
                    @endif 
                  
                <form method="post" action="{{route('contact.store')}}" id="form_contact">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control" name="name" required placeholder="Name*" data-form-field="Name">
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" name="email" required placeholder="Email*" data-form-field="Email">
                </div>

                <div class="form-group">
                  <input type="tel" class="form-control" name="phone" required placeholder="Phone" data-form-field="Phone">
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="message" required placeholder="Message" rows="7" data-form-field="Message"></textarea>
                </div>

                <div>
                <button type="submit" class="btn btn-lg btn-danger">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection