@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')



<a href="{{route('studyschedule.create')}}">Add StudySchedule</a>



@if ($errors->any())
                    <div class="alert alert-danger" style="width:500px;   margin: 0 auto ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



                @if(Session::has('message'))
<p class="alert alert-info" style="width:500px;   margin: 0 auto ">{{ Session::get('message') }}</p>
@endif






@include('footer')
