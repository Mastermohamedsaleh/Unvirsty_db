@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')











<div class="container">






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






  <div class="card">



  <div class="card-body">

 <form method="post"  action="{{route('doctors_college.store')}}" autocomplete="off" >
      @csrf
      <div class="row">

   




      <div class="form-group">
    <label for="exampleFormControlSelect2">Doctor :</label>
    <select multiple name="doctor[]"  id="exampleFormControlSelect2">
                        @foreach($doctors as $doctor)
                              <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                        @endforeach
    </select>
  </div>




      <div class="col-12 mt-3">
      <div class="form-group">
         <label>College : </label>
                   <select name="college_id"  >    
                     <option value="" disable>Chooces College</option>
                        @foreach($colleges as $college)
                              <option value="{{$college->id}}">{{$college->name}}</option>
                        @endforeach
                   </select>
         </div>
      </div>



      <div class="col-12 mt-3">
      <div class="form-group">
         <label> Classroom : </label>
                <select name="classroom_id"   >

                </select>
         </div>
      </div>

      <div class="col-12 mt-3">
      <div class="form-group">
         <label> Section : </label>
                <select name="section_id"   >

                </select>
         </div>
      </div>

      <div class="col-12 mt-3">
      <div class="form-group">
         <label> Course : </label>

                <select name="course_id"   >
          @foreach($courses as $course)
                <option value="{{$course->id}}">{{$course->name}}</option>
          @endforeach
                </select>
         </div>
      </div>



</div>



<button type="submit" class="btn btn-primary">Save</button>
</form>



</div>


</div> 


</div>










 @include('footer')
