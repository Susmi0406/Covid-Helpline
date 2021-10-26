      <!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    
    <li> <x-app-layout></x-app-layout></li> 
    <div class="container-scroller">
    <table>
            
                 
     @include("admin.navbar")
     <br>
    <table>

      <tr>
      <td><a  href="{{url('/gsdetails')}}" class="btn btn-secondary btn-sm" style="font-size: 18px; width: 100%; font-family:courier;">Back</a>
           </tr>
       </table> 
  
      <div style="position: relative; top: 60px; right: -60px "> 
      	<table class="table table-dark table-hover">
      		
      		<tr>
      			<th style="padding: 40px">Name</th>
      			<th style="padding: 40px">District</th>
      			<th style="padding: 40px">DS Area</th>
      			<th style="padding: 40px">GN Range</th>
      			<th style="padding: 40px">Contact No</th>
            <th style="padding: 40px">Email</th>
            <th style="padding: 30px">Action</th>
      		</tr>

          @foreach($key as $details)

      		<tr align="center">

      			<td>{{$details->name}}</td>
      			<td>{{$details->district}}</td>
      			<td>{{$details->dsdivision}}</td>
      			<td>{{$details->gndivision}}</td>
      			<td>{{$details->contactno}}</td>
            <td>{{$details->email}}</td>
            <td><a href="{{url('/deletegs',$details->id)}}" class ="btn btn-danger" style="font-size: 15px; width: 100%;">Delete</a></td>
      		</tr>
          @endforeach


      	</table>  

    </div>

    
 </div>
     @include("admin.adminscript")

  </body>
</html>
