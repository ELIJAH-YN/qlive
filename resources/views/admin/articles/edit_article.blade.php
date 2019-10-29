@extends('layouts.adminLayout.admin_design')
@section('content')

    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#">文章</a><a href="#" class="current">文章編輯</a> </div>
            <h1>文章</h1>
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
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>文章編輯</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{ url('/admin/edit-article/'.$articleDetails->id) }}" name="edit_article" id="edit_article" novalidate="novalidate" enctype="multipart/form-data">
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
                                        <input type="text" name="title" id="title" value="{{ $articleDetails->title}}">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">封面照片</label>
                                    <div class="controls">
                                        <input type="file" name="cover" id="cover">
                                        <input type="hidden" name="current_cover" value="{{ $articleDetails->cover }}">
                                        @if(!empty($articleDetails->cover))
                                            <img src="{{ asset('/assets/images/cover/small/'.$articleDetails->cover) }}" alt="" style="width: 100px;">
                                            <a href="{{ url('/admin/delete-article-cover/'.$articleDetails->id) }}">Delete</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">文章內容</label>
                                    <div class="controls">
                                        <textarea name="description" id="description">{{ $articleDetails->description }}</textarea>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="編輯文章" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
