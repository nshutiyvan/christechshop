@extends('layouts.dash')

@section('content')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">All Sliders</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Sliders</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
                @include('admin.include.errors')
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Slider Id</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($sliders->count() > 0)
                        @foreach($sliders as $slider)
                            <td>{{ $slider->id }}</td>
                            <td><img src="{{ $slider->image }}" width="80px" height="80px"></td>
                            <td class="center">
                                <a class="btn btn-danger" href="{{ route('slider.delete', ['id' => $slider->id]) }}">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                            </tr>
                        @endforeach

                    @else
                        <tr>
                            <th colspan="11" class="text-center">No Sliders Yet</th>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div><!--/span-->
    </div><!--/row-->


@endsection