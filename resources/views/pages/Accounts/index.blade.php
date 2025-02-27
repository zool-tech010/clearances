@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    قائمة الحسابات
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    قائمة الحسابات
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                <a href="{{route('account.create')}}" class="btn btn-success btn-sm" role="button"
                                   aria-pressed="true">اضافة حساب جديد</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>صاحب الحساب</th>
                                            <th>اسم البنك </th>
                                            <th>رقم الحساب </th>
                                            <th> الرصيد </th>
                                            <th> العمليات </th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($account)
                                        @foreach($account as $accounts)

                                            <tr>
                                                <td>{{ $accounts->id}}</td>
                                                <td>{{$accounts->clearance->name}}</td>
                                                <td>{{$accounts->banks->bank_name}}</td>
                                                <td>{{$accounts->accountNumber}}</td>
                                                <td>{{$accounts->balance}}</td>

                                                <td>
{{--                                                    {{route('admin.maincategories.edit',$bank -> id)}}--}}
                                                    <div class="btn-group" role="group"
                                                         aria-label="Basic example">
                                                        <a href="{{route('account.edit', $accounts -> id)}}"
                                                           class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">تعديل</a>
{{--                                                        {{route('admin.maincategories.delete',$category -> id)}}--}}

                                                        <a href="{{route('account.delete', $accounts-> id)}}"
                                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">حذف</a>



                                                    </div>
                                                </td>

                                            </tr>

{{--                                        @include('pages.library.destroy')--}}
                                        @endforeach
                                        @endisset
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
{{--    @toastr_js--}}
{{--    @toastr_render--}}
@endsection
