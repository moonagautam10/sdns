<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Add Slider') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 15px;">
                    <div class="col-md-12" style="padding-bottom: 15px; text-align: right;">
                        <a  href="{{route('getManageSlider')}}" class="btn btn-primary">Manage Slider
                        </a>
                    </div>
                            <div class="card bg-light mt-3">        
                                <div class="card-header">
                                   Add Slider
                               </div>
                                <div class="card-body"> 
                                <form action="{{route('postAddSlider')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label class="float-left" for="photo">Photo</label>
                                                <input type="file" class="form-control" name="photo" required>
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

