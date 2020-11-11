<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teams') }}
        </h2>
    </x-slot>
    <div class="py-12">
    	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 15px;">
                    <div class="col-md-12" style="margin-bottom: 15px; text-align: right;">
                        <a  href="{{route('getAddTeam')}}" class="btn btn-primary">Add Teams</a>
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
                                <th>type</th>
                                <th>name</th>
                                <th>post</th>
                                 <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($teams as $team)
                            <tr>
                            <td>{{$team->type}}</td>
                            <td> {{$team->name}}</td>
                            <td> {{$team->post}}</td>
                            <td><img src="{{asset('site/img/team/'.$team->photo)}}" alt="" width="120"></td>
                            <td><a href="{{route('getDeleteTeam',$team->id)}}">Delete</a> | <a  href="{{route('getEditTeam',$team->id)}}">Edit</a></td>
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

