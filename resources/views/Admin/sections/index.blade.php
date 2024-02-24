@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
     @include('nav')





<div class="container mt-3">  
 <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#section">
 <i class="fa-solid fa-plus"></i>  Add New Section
</button><br><br>
  @include('Admin.sections.add')
</div>



     




     <div class="container">

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



















 <div class="container">
<div class="row">

<?php $i = 1 ;  ?>
@foreach($colleges as $college)
    <div class="col-lg-4">
        <div class="card card-margin">

            <div class="card-header no-border">
                <h5 class="card-title">College</h5>
            </div>

            <div class="card-body pt-0">

                <div class="widget-49">
                    <div class="widget-49-title-wrapper">
                        
                        <div class="widget-49-date-success">
                            <span class="widget-49-date-day">0{{$i++}}</span>
                            <span class="widget-49-date-month">apr</span>
                        </div>

                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">{{$college->name}}</span>
                            <span class="widget-49-meeting-time">{{$college->created_at}}</span>
                        </div>
                    </div>
                

                    <div class="widget-49-meeting-action">
                        <a href="{{route('sections.show',$college->id)}}" class="btn btn-sm btn-flash-border-primary">View All Section</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endforeach


</div>
</div>







<table id="datatable" class="table table-striped">





<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Classroom</th>
      <th scope="col">College</th>
      <th scope="col">Status</th>
      <th scope="col">Process</th>
    </tr>
  </thead>
  <tbody>
    <?php  $i = 1;  ?>
    @foreach($sections as $section)
    <tr>
      <th scope="row">{{$i++}}</th>
      <td>{{$section->name}}</td>
      <td>{{$section->classroom->name}}</td>
      <td>{{$section->college->name}}</td>
      <td>  
        
 {{--    {{ ($section->status  == 1 ? <p class="text-primary"> "able" </p> : <p class="text-danger"> "disable" </p>  )  }}  --}}
    

      @if($section->status  == 1)
      <h5 class="text-primary"> able </h5>
      @else
      <h5 class="text-danger"> disable </h5>
      @endif

    </td>
     
      <td>

<button type="button" class="btn btn-sm btn-danger inline-block" data-bs-toggle="modal" data-bs-target="#deletesection{{$section->id}}">
<i class="fas fa-trash"></i>
</button>
                

 <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editsection{{$section->id}}">
 <i class="fas fa-edit"></i>
</button><br><br>
@include('Admin.sections.edit')
@include('Admin.sections.delete')


      </td>
    </tr>
@endforeach
  </tbody>



</table>
     
      
<!-- end container -->
</div>













 








@include('footer')