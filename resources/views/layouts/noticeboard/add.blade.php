<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Add Notice Board') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 15px;">
                    <div class="col-md-12" style="padding-bottom: 15px; text-align: right;">
                        <a  href="{{route('getManageNoticeboard')}}" class="btn btn-primary">Manage Notice Board
                        </a>
                    </div>
                            <div class="card bg-light mt-3">        
                                <div class="card-header">
                                   Add Notice Board
                               </div>
                                <div class="card-body"> 
                                <form action="{{route('postAddNoticeboard')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="float-left" for="title">Title</label>
                                                <input class="form-control" name="title">
                                            </div>
                                            <div class="form-group">
                                                <label class="float-left" for="detail">Detail</label>
                                                <textarea class="form-control" name="detail"></textarea>
                                            </div>
                                            <div class="form-group mb-0 text-center">
                                                <input class="btn btn-primary btn-block" type="submit" value="Add"> 
                                            </div>
                                        </form>
                                </div>
                            </div>
                    </div>
                   
                </div>
            </div>
        </div>
   
   

</x-app-layout>

