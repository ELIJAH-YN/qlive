@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#">Articles</a><a href="#" class="current">Add Articles</a> </div>
        <h1>Article</h1>                        @if(Session::has('flash_message_error'))
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
    <div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Add Article</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="{{ url('/admin/add-article') }}" name="add_article" id="add_article" novalidate="novalidate" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="control-group">
                                <label class="control-label">文章類別</label>
                                <div class="controls">
                                    <select name="article_id" id="article_id" style="width: 220px;">
                                        <?php echo $categories_dropdown; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">文章主題</label>
                                <div class="controls">
                                    <input type="text" name="title" id="title">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">封面照片</label>
                                <div class="controls">
                                    <input type="file" name="cover" id="cover">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">文章內容</label>
                                <div class="controls">
                                    <textarea name="description" id="description"></textarea>
                                </div>
                            </div>
{{--                            <div class="control-group">--}}
{{--                                <label class="control-label">段落照片</label>--}}
{{--                                <div class="controls">--}}
{{--                                    <div class="uploader" id="uniform-undefined">--}}
{{--                                        <input type="file" size="19" style="opacity: 0;">--}}
{{--                                        <span class="filename">No file selected</span>--}}
{{--                                        <span class="action">Choose File</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="control-group">--}}
{{--                                <label class="control-label">段落文章內容</label>--}}
{{--                                <div class="controls">--}}
{{--                                    <textarea name="second_description" id="second_description"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-actions">
                                <input type="submit" value="Add Category" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
