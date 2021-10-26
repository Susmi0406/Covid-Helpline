<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  	
    <li> <x-app-layout></x-app-layout></li> 
    <div class="container-scroller">        
     @include("admin.navbar")

    
    <div style="position: relative; top: 60px; right: -60px "> 
      	<table class="table table-dark table-hover">
      		
      		<tr>
      			<th style="padding: 30px">Name</th>
      			<th style="padding: 30px">Email</th>
      			<th style="padding: 30px">Action</th>
      		</tr>

          @foreach($data as $data)

      		<tr align="center">

            @if($data->usertype=="0")
      			<td>{{$data->name}}</td>
      			<td>{{$data->email}}</td>
      			<td><a href="{{url('/deleteuser',$data->id)}}" class ="btn btn-danger" style="font-size: 15px; width: 100%;">Delete</a></td>
            @endif

      		</tr>
          @endforeach


      	</table>   


    </div>

     </div>
     @include("admin.adminscript")

  </body>
</html>

