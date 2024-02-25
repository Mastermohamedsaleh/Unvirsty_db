
  
  
  
     @include('header')
  <div class="wrapper">
    @include('sidebar')



      <div class="main">
 @include('nav')

        <!-- main -->



<div class="container mt-3">

  <?php  
    $namecollege = \App\Models\College::where('id',auth()->user()->college_id)->first();     
  ?>
     <h2 class="text-primary text-center"><?php
       if($namecollege){
        echo $namecollege->name;
       }
   ?></h2>
      
       



@if(auth()->user()->status == 0)
      <div class="row">
                <div class="col-lg-4 col-sm-6">

                    <div class="card-box bg-blue">

                        <div class="inner">
                            <h3> {{App\Models\College::count()}} </h3>
                            <p>  College </p>
                        </div>

                        <div class="icon">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div>
                        
                        <a href="{{route('colleges.index')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                </div>
        
                <div class="col-lg-4 col-sm-6">
                    <div class="card-box bg-green">
                        <div class="inner">
                            <h3>{{App\Models\Classroom::count()}} </h3>
                            <p> Classroom </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <a href="{{route('classrooms.index')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card-box bg-orange">
                        <div class="inner">
                            <h3> {{App\Models\Section::count()}} </h3>
                            <p>  Section </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </div>
                        <a href="{{route('sections.index')}}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

    </div>
@endif



<!-- end contaienr -->
    </div>



    @livewire('calendar')
    @livewireScripts
    @stack('scripts')

    
 @include('footer')
