@extends('admin.index')
@section('content')
    <div class="span9" id="content">
        <div class="row-fluid mgT12">
            @if(count($errors) > 0)
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Success</h4>
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach
                </div>
            @endif

            @if(session('thongbao'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Success</h4>
                    {{session('success')}}
                </div>
            @endif
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="breadcrumb">
                        <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
                        <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
                        <li>
                            <a href="#">Dashboard</a> <span class="divider">/</span>
                        </li>
                        <li>
                            <a href="#">Settings</a> <span class="divider">/</span>
                        </li>
                        <li class="active">Tools</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <!-- block -->
            <div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"> Danh Sách Tin</div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <div class="table-toolbar">
                            <div class="btn-group">
                                <a href="{{route('news.add')}}"><button class="btn btn-success">Add New <i class="icon-plus icon-white"></i></button></a>
                            </div>
                            <div class="btn-group pull-right">
                                <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div>
                        </div>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                            <thead>
                            <tr>
                                <th>Mã Tin</th>
                                <th>Tên Bản Tin</th>
                                <th>Hình ảnh</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $item)
                                <tr class="odd gradeX">
                                    <td width="80px">{{$item->news_id}}</td>
                                    <td width="230px">{{$item->title}}</td>
                                    <td><img src="source/image/product/{{$item->image}}" height="50px" width="70px">
                                    </td>
                                    <td class="center" width="40px">
                                        <a href="{{route('news.add',$item->news_id)}}">
                                            <button class="btn btn-primary"><i class="icon-pencil icon-white"></i></button>
                                        </a>
                                    </td>
                                    <td class="center" width="40px">
                                        <a href="{{route('news.add',$item->news_id)}}">
                                            <button class="btn btn-danger"><i class="icon-remove icon-white"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /block -->
        </div>
    </div>
@endsection