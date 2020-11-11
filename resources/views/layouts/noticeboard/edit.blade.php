<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Edit Noticeboard ') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 15px;">
                    <div class="col-md-12" style="text-align: right; padding: 20px 0;">
                        <a  href="{{route('getManageNoticeboard')}}" class="btn btn-primary">Manage  Noticeboard
                        </a>
                    </div>
                            <div class="card bg-light mt-3">        
                                <div class="card-header">
                                   Edit Noticeboard
                               </div>
                                <div class="card-body"> 
                                        <form action="{{route('postEditNoticeboard',$noticeboard->id)}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label class="float-left" for="title">Title</label>
                                                <input class="form-control"   value="{{$noticeboard->title}}"  name="title">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Detail</label>
                                                <textarea class="form-control"  name="detail">{{$noticeboard->detail}}</textarea>
                                            </div>
                                            <div class="form-group mb-0 text-center">
                                                <input class="btn btn-primary btn-block" type="submit" value="Edit"> 
                                            </div>

                                        </form>
                                </div>
                            </div>
                </div>
                   
            </div>
        </div>
    </div>

   

</x-app-layout>

