@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
     @include('nav')



     



     <div class="contanier">



      <!-- Message Success -->
@if(Session::has('message'))
<p class="alert alert-info" style="width:500px;   margin: 0 auto ">{{ Session::get('message') }}</p>
@endif
<!-- End Success -->

 <!-- Message Error -->
@if ($errors->any())
                    <div class="alert alert-danger" style="width:500px;   margin: 0 auto ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
@endif
 <!-- End Message Error -->
     
<form action="{{route('setting.update','test')}}" method="post">
@csrf
@method('PUT')
<div class="card">
<div class="card-body">
     <div class="row">


     <legend><span class="number">S</span>Setting Update</legend>

@foreach($settings as $setting)


<input type="hidden" value="{{$setting->id}}" name="setting_id">

     <div class="col-12">
        <input type="text" value="{{$setting->unvirsty_name}}" name = "unvirsty_name" >
     </div>
     <div class="col-12">
        <input type="text" value="{{$setting->phone}}" name="phone"  >
     </div>
     <div class="col-12">
        <input type="text" value="{{$setting->address}}" name="address" >
     </div>
     <div class="col-12">
        <input type="text" value="{{$setting->email}}" name="email">
     </div>
     <div class="col-12">
        <input type="text" value="{{$setting->link_facebook}}" name="link_facebook">
     </div>
     <div class="col-12">
        <input type="text" value="{{$setting->link_twitter}}" name="link_twitter">
     </div>
     <div class="col-12">
        <input type="text" value="{{$setting->link_linked_in}}" name="link_linked_in">
     </div>
@endforeach


<button type="submit" class="btn btn-primary">Update</button>


     </div>

     </div>



     </div>


     </form>










     </div>












     @include('footer')
