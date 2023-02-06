<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  		@include("admin/admincss")
  </head>
  <body>
  	<div class="container-scroller">
  	@include("admin/navbar")
      <div class="m-5 w-full">
        <form class="p-5 w-1/2 bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('updatefood',$data->id) }}" method="post" enctype="multipart/form-data">
            <h3 class="text-gray-700 text-center">Update Food Item</h3>
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="Title" value="{{$data->title}}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                    Price
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" name="price" type="text" placeholder="Price" value="{{$data->price}}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                    Description
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" name="description" type="text" placeholder="Description" value="{{$data->description}}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    Old Image
                </label>
                <img src="foodimage/{{$data->image}}" width="120px">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    New Image
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="file" placeholder="Image">
            </div>
            <div class="mb-4">
                <input class="shadow appearance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="submit" type="submit" value="UPDATE ITEM">
            </div>
        </form>
      </div>
  	</div>


  	@include("admin/adminscript")
  </body>
</html>
