<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Slider Page') }}
        </h2>
    </x-slot>
    <div class="py-12">
    	<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="padding: 15px;">
                    <div class="col-md-12" style="margin-bottom: 15px; text-align: right;">
                        <a  href="{{route('getAddSlider')}}" class="btn btn-primary">Add Slider</a>
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
                                <th>photo</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $slider)
                            <tr>
                                <td>{{$slider->created_at}}</td>
                                <td><img src="{{asset('site/img/slider/'.$slider->photo)}}" width="100"></td>
                                
                                <td><a href="{{route('getDeleteSlider',$slider->id)}}">Delete</a></td>
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
<!-- Button trigger modal -->
 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</x-app-layout>

