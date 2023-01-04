@extends('layouts/blogmain')
@section('blogs')

<section class="section1">
    <div class="d-flex">
     <!---------------------Card1------------>
     <div class="body">
    <div class="card">
        <img src="img/image 24.png" class="card-img-top" alt="...">
        
        <div class="card-body">
            <div class="grid">
                
    <div class="col-sm">
      
      <p><img src="img/vector.png">   By Dalky </P>
       
    </div>
    <div class="vr" style="color:white; height:30px; margin-top:1%; width:2px;"></div>
    
    <div class="col-sm" style="margin-right:15%;">
        <p><img src="img/vector1.png">   16 December,2022 </P>
    </div>
    <div class="vr" style="color:white; height:30px; margin-top:1%; width:2px;"></div>
    <div class="col-sm"style="margin-right:10%;">
        <p><img src="img/vector2.png">   Digital Marketing </P>
  </div>
            </div>
              <br><br>
          <h5 class="card-title">Delivering the best digital marketing</h5>
          <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
        </p>
       <a href="{{route('details')}}"> <button type="button" class="btn btn-outline-success">Read More -></button></a>

        </div>
      </div>

      <!----------------Card2------------>
      
      <div class="card">
        <img src="img/image 24.png" class="card-img-top" alt="...">
        
        <div class="card-body">
            <div class="grid">
                
    <div class="col-sm">
      
      <p><img src="img/vector.png">   By Dalky </P>
       
    </div>
    <div class="vr" style="color:white; height:30px; margin-top:1%; width:2px;"></div>
    <div class="col-sm" style="margin-right:15%;">
        <p><img src="img/vector1.png">   16 December,2022 </P>
    </div>
    <div class="vr" style="color:white; height:30px; margin-top:1%; width:2px;"></div>
  
    <div class="col-sm"style="margin-right:10%;">
        <p><img src="img/vector2.png">   Digital Marketing </P>
  </div>
            </div>
              <br><br>
          <h5 class="card-title">Delivering the best digital marketing</h5>
          <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
        </p>
        <a href="{{route('details')}}"> <button type="button" class="btn btn-outline-success">Read More -></button></a> 

        </div>
      </div>
<!--------------------card3-------------------->
<div class="card">
    <img src="img/image 24.png" class="card-img-top" alt="...">
    
    <div class="card-body">
        <div class="grid">
            
<div class="col-sm">
  
  <p><img src="img/vector.png">   By Dalky </P>
   
</div>
<div class="vr" style="color:white; height:30px; margin-top:1%; width:2px;"></div>
<div class="col-sm" style="margin-right:15%;">
    <p><img src="img/vector1.png">   16 December,2022 </P>
</div>
<div class="vr" style="color:white; height:30px; margin-top:1%; width:2px;"></div>
<div class="col-sm"style="margin-right:10%;">
    <p><img src="img/vector2.png">   Digital Marketing </P>
</div>
        </div>
          <br><br>
      <h5 class="card-title">Delivering the best digital marketing</h5>
      <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
    </p>
    <a href="{{route('details')}}"> <button type="button" class="btn btn-outline-success">Read More -></button></a>

    </div>
  </div>
  <!--------------------card4------------------->
  <div class="card">
        <img src="img/image 24.png" class="card-img-top" alt="...">
        
        <div class="card-body">
            <div class="grid">
                
    <div class="col-sm">
      
      <p><img src="img/vector.png">   By Dalky </P>
       
    </div>
    <div class="vr" style="color:white; height:30px; margin-top:1%; width:2px;"></div>
    <div class="col-sm" style="margin-right:15%;">
        <p><img src="img/vector1.png">   16 December,2022 </P>
    </div>
    <div class="vr" style="color:white; height:30px; margin-top:1%; width:2px;"></div>
    <div class="col-sm"style="margin-right:10%;">
        <p><img src="img/vector2.png">   Digital Marketing </P>
  </div>
            </div>
              <br><br>
          <h5 class="card-title">Delivering the best digital marketing</h5>
          <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
        </p>
        <a href="{{route('details')}}"> <button type="button" class="btn btn-outline-success">Read More -></button></a>

        </div>
      </div>
    </div>
   
    @include('pages/sides');
    
    
    </div>
    <!-----------pagination------------->
    
</section>
<section class="section2">
<div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active"><a class="page-link" style="background-color:#92d33e;" href="#">2<span class="sr-only">(current)</span></a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
</div>
</section>
@endsection