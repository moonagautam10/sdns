<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('News') }}
        </h2>
    </x-slot>
    <div class="py-12">
    	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 15px;">
                     @if(session()->has('message'))
                            <div class="alert alert-success" style="display: block; overflow: hidden;">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                
                                <th>Title</th>
                                <th>photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                        <tr>
                           
                            <td> {{$page->title}}</td>
                            <td><img src="{{asset('site/img/page/'.$page->photo)}}" alt="" width="120"></td>
                            <td> <a  href="{{route('getEditPage',$page->id)}}">Edit</a></td>
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

