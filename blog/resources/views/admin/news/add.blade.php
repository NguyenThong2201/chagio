@extends('admin.index')
@section('content')
    <div class="span9" id="content">
        <div class="row-fluid mgT12">

            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="breadcrumb">
                        <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                        <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                        <li>
                            <a href="">Bản Tin</a> <span class="divider">/</span>
                        </li>
                        <li class="active">Thêm Tin Mới</li>
                    </ul>
                </div>
            </div>
        </div>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Error</h4>
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Success</h4>
                {{session('success')}}
            </div>
        @endif
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left">Thêm Tin Mới</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form class="form-horizontal" id="form" action="{{ route('admin.news.add') }}" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <legend>Form Components</legend>
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="control-group">
                                    <div class="controls">
                                        <label class="control-label" for="typeahead"><span class="required">(*)</span> Trường bắt buộc</label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="typeahead">Tiêu đề <span class="required">*</span> </label>
                                    <div class="controls">
                                        <input type="text" class="span10" value="{{old('title')}}" name="title" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="select01">Loại tin <span class="required">*</span></label>
                                    <div class="controls">
                                        <select id="select01" class="chzn-select span6" name="category">
                                            @foreach($category as $item)
                                                <option value="{{$item->category_id}}">{{$item->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <div class="row">
                                            <div id="image_product"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="fileInput">Hình tin <span class="required">*</span></label>
                                    <div class="controls">
                                        <input class="input-file uniform_on form-control" type="file" name="imgnews" onchange="image_product();"/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="date01">Thời gian mở bán</label>
                                    <div class="controls">
                                        <input type="text" autocomplete="off" name="timeopen" class="input-xlarge datepicker" value=""/>
                                        <p class="help-block">In addition to freeform text</p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="optionsCheckbox">Hiện thi Home</label>
                                    <div class="controls">
                                        <label class="radio-inline">
                                            <input class="uniform_on" type="radio" name="moi" value="1" checked>
                                            Mới
                                            <input class="uniform_on" type="radio" name="moi" value="0">
                                            Cũ
                                        </label>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="textarea2">Nội dung <span class="required">*</span></label>
                                    <div class="span12" id="content">
                                        <div class="row-fluid">
                                            <!-- block -->
                                            <div class="block">
                                                <div class="navbar navbar-inner block-header">
                                                    <div class="muted pull-left">Nhập Nội Dung</div>
                                                </div>
                                                <div class="block-content collapse in">
                                                    <textarea id="ckeditor_full" name="content"></textarea>
                                                </div>
                                            </div>
                                            <!-- /block -->
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="reset" class="btn"><a href="">Cancel</a></button>
                                </div>
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>
@endsection

@section('script')
    <script>
        function image_product() {
            $('#image_product').append("<img src='"+URL.createObjectURL(event.target.files[0])+"' width='100' height='100'>");
        }
    </script>
@endsection