<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Edit Feature') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 15px;">
                    <div class="col-md-12" style="text-align: right; padding: 20px 0;">
                        <a  href="{{route('getManageFeature')}}" class="btn btn-primary">Manage  Feature
                        </a>
                    </div>
                            <div class="card bg-light mt-3">        
                                <div class="card-header">
                                   Edit Feature
                               </div>
                                <div class="card-body"> 
                                    <form action="{{route('postEditFeature',$feature->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="float-left" for="title">Title</label>
                                                <input class="form-control"   value="{{$feature->title}}"  name="title">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Detail</label>
                                                <textarea class="form-control" name="detail">{{$feature->detail}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Photo</label>
                                                <input type="file" class="form-control" name="photo" style="opacity:1; z-index:1;"><br/>
                                                <img src="{{asset('site/img/feature/'.$feature->photo)}}" alt="" width="100">
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

