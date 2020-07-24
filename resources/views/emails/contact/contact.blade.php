@component('mail::message')
    <h3>name</h3>
    <h4>{{$data['name']}}</h4>
      <h3>Email</h3>
    <h4>{{$data['email']}}</h4>
    <h3>Message</h3>
    <p>{{$data['message']}}</p>
@endcomponent
