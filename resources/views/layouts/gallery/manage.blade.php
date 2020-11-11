<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gallery') }}
        </h2>
    </x-slot>
    <div class="py-12">
    	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 15px;">
                    <div class="col-md-12" style="margin-bottom: 15px; text-align: right;">
                        <a  href="{{route('getAddGallery')}}" class="btn btn-primary">Add gallery</a>
                    </div>
                     <div>
                        @if(session()->has('message'))
                            <div class="alert alert-success" style="display: block; overflow: hidden;">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </div>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                
                                <th>photo</th>
                                <th>title</th>
                                 <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($galleries as $gallery)
                            <tr>
                            <td>{{$gallery->title}}</td>
                            
                            <td><img src="{{asset('site/img/gallery/'.$gallery->photo)}}" alt="" width="120"></td>
                            <td><a href="{{route('getDeleteGallery',$gallery->id)}}">Delete</a> | <a  href="{{route('getEditGallery',$gallery->id)}}">Edit</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                       
                    </table>
                </div>
            </div>
        </div>
    </div>
   <!-- Button trigger modal -->


<!-- Modal -->

</x-app-layout>

