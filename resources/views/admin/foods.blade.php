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
		<div class="m-5 w-full">
			<form class="p-5 w-1/2 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('uploadfood') }}" method="post" enctype="multipart/form-data">
				<h3 class="text-gray-700 text-center">Add Food Items</h3>
				@csrf
				<div class="mb-4">
					<label class="block text-gray-700 text-sm font-bold mb-2" for="title">
						Title
					</label>
					<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Title">
				</div>
				<div class="mb-4">
					<label class="block text-gray-700 text-sm font-bold mb-2" for="price">
						Price
					</label>
					<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" name="price" type="text" placeholder="Price">
				</div>
				<div class="mb-4">
					<label class="block text-gray-700 text-sm font-bold mb-2" for="description">
						Description
					</label>
					<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" placeholder="Description">
				</div>
				<div class="mb-4">
					<label class="block text-gray-700 text-sm font-bold mb-2" for="image">
						Image
					</label>
					<input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="file" placeholder="Image">
				</div>
				<div class="mb-4">
					<input class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="submit" type="submit" value="ADD ITEM">
				</div>
			</form>
			<div class="bg-white p-5">
				<table class="w-full border-b text-gray-900">
					<tr class="p-2 border-b">
					<th class="p-2">S.No</th>
					<th class="p-2">Title</th>
					<th class="p-2">Price</th>
					<th class="p-2">Description</th>
					<th class="p-2">Image</th>
					<th class="p-2">Action</th>
					</tr>
					<?php $i = 1; ?>
					@foreach($data as $data)
						<tr class="p-2 border-b">
						<td class="p-2">{{$i}}</td>
						<td class="p-2">{{$data->title}}</td>
						<td class="p-2">{{$data->price}}</td>
						<td class="p-2">{{$data->description}}</td>
						<td class="p-2">
							<img src="foodimage/{{$data->image}}" alt="item-image" width="60px">
						</td>
						<td class="p-2">
							<a href="{{ route('deletefood',$data->id) }}">
								<i class="mdi mdi-delete"></i>
							</a>
							<a href="{{ route('editfood',$data->id) }}">
								<i class="mdi mdi-pencil"></i>
							</a>
						</td>
						</tr>
						<?php $i++; ?>
					@endforeach
				</table> 
			</div>
	    </div>
	</div>


	@include("admin/adminscript")
</body>

</html>