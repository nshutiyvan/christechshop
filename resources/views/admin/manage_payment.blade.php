@extends('layouts.dash')

@section('content')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">All Payments</a></li>
    </ul>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Payments</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            @include('admin.include.errors')
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Payment Id</th>
                        <th>Payment Method</th>
                        <th>Payment Total</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($payments->count() > 0)
                        @foreach($payments as $payment)
                            <td>{{ $payment->id }}</td>
                            <td>{{ $payment->payment_method }}</td>
                            <td>{{$payment->total}} Frw</td>
                            <td>{{ $payment->created_at->toFormattedDateString() }}</td>
                            <td class="center">
                                <a class="btn btn-danger" href="{{ route('payment.delete', ['id' => $payment->id]) }}">
                                    <i class="halflings-icon white trash"></i>
                                </a>
                            </td>
                            </tr>
                        @endforeach

                    @else
                        <tr>
                            <th colspan="11" class="text-center">No Products Yet</th>
                        </tr>
                    @endif
                    </tbody>
                </table>
                <div class="pagination pagination-centered">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/span-->
    </div><!--/row-->


@endsection