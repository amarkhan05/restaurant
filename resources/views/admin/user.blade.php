<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  		@include("admin/admincss")
  </head>
  <body>
  	<div class="container-scroller">
  	@include("admin/navbar")
  		<div class="m-5">
	        <table class="bg-white border-b text-gray-900">
	            <tr class="p-2 border-b">
	              <th class="p-2">S.No</th>
	              <th class="p-2">Name</th>
	              <th class="p-2">Email</th>
	              <th class="p-2">User Type</th>
	              <th class="p-2">Action</th>
	            </tr>
	            <?php $i = 1; ?>
	            @foreach($data as $data)
		            <tr class="p-2 border-b">
		              <td class="p-2">{{$i}}</td>
		              <td class="p-2">{{$data->name}}</td>
		              <td class="p-2">{{$data->email}}</td>
		              <td class="p-2">
		              	@if($data->usertype == '1')
		              		Admin
		              	@else
		              		User
		              	@endif
		              </td>
		              <td class="p-2">
		              	@if($data->usertype == '0')
		              		<a href="{{ route('deleteusers',$data->id) }}">
						        <i class="mdi mdi-delete"></i>
						    </a>
		              	@endif
		              </td>
		            </tr>
		            <?php $i++; ?>
		        @endforeach
	        </table>  
	    </div>
  	</div>


  	@include("admin/adminscript")
  </body>
</html>
