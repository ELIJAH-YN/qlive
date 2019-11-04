@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#">Model Card</a><a href="#" class="current">Model Card 審核</a> </div>
        <h1>Model Card</h1>
        @if(Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif
        @if(Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                        <h5>View Categories</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
{{--                                <th>照片：</th>--}}
                                <th>姓名</th>
                                <th>暱稱</th>
                                <th>審核</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($form as $row)
                                <tr class="gradeX">
                                    <td>{{ $row->real_name }}</td>
                                    <td>{{ $row->nick_name }}</td>
{{--                                    <td>{{ $category->url }}</td>--}}
                                    <td class="center">
                                        <a href="" class="btn btn-success btn-mini">View</a>
                                        <a href="<?php /*{{ url('/admin/edit-form/'.$row->id) }} */?>" class="btn btn-primary btn-mini">Pass</a>
                                        <a id="delCat" href="<?php /*{{ url('/admin/delete-category/'.$row->id) }}*/ ?>" class="btn btn-danger btn-mini">Save</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
