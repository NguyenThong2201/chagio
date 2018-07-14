@extends('layouts.home.pagedetail')
@section('content')
<div class="col-md-9 technology-left">
	<div class="agileinfo">
	  <h2 class="w3">CHI TIẾT</h2>
		<div class="single">
		   <img src="/page/images/{{ $newsDetail->image }}" class="img-responsive" alt="">
		    <div class="b-bottom"> 
		      <h5 class="top">{{ $newsDetail->title }}</h5>
			   <p class="sub"><?php echo $newsDetail->content ?></p>
		      <p class="mgnT20">On Aug 01 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a></p>
			 
			</div>
		 </div>
		<div id="fb-root"></div>
		<div class="fb-comments" data-href="https://diennuocdatduong.com/chi-tiet/{{ $url_comment }}" data-width="700" data-numposts="5"></div>
		<div class="clearfix"></div>
		</div>
	</div>
@endsection()
