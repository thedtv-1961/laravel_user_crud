@if(Session::has('message'))
    <div class="{{Session::get('message')}}">
        {{Session::get('message')}}
    </div>
@endif
