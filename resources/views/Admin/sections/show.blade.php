@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
     @include('nav')





<div class="container">












 <h3 class="text-primary text-center">Sections</h3>
         


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