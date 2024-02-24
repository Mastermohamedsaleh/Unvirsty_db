
  
  
  
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
      
       




      <div class="row">
                <div class="col-lg-4 col-sm-6">

                    <div class="card-box bg-blue">

                        <div class="inner">
                            <h3> 6 </h3>
                            <p>  College </p>
                        </div>

                        <div class="icon">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div>
                        
                        <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                    </div>

                </div>
        
                <div class="col-lg-4 col-sm-6">
                    <div class="card-box bg-green">
                        <div class="inner">
                            <h3> ₹100 </h3>
                            <p> Classroom </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card-box bg-orange">
                        <div class="inner">
                            <h3> 22 </h3>
                            <p>  Section </p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

    </div>




<!-- end contaienr -->
    </div>



    @livewire('calendar')
    @livewireScripts
    @stack('scripts')

    
 @include('footer')
