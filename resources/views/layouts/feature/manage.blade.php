<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Features') }}
        </h2>
    </x-slot>
    <div class="py-12">
    	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 15px;">
                    <div class="col-md-12" style="margin-bottom: 15px; text-align: right;">
                        <a  href="{{route('getAddFeature')}}" class="btn btn-primary">Add Features</a>
                    </div>
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
                                <th>Post Date</th>
                                <th>Title</th>
                                <th>photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($features as $feature)
                        <tr>
                            <td>{{$feature->created_at}}</td>
                            <td> {{$feature->title}}</td>
                            <td><img src="{{asset('site/img/feature/'.$feature->photo)}}" alt="" width="60"></td>
                            <td><a href="{{route('getDeleteFeature',$feature->id)}}">Delete</a> | <a  href="{{route('getEditFeature',$feature->id)}}">Edit</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
   
   <!-- Button trigger modal -->


<!-- Modal -->

</x-app-layout>

