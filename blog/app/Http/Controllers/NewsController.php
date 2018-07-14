<?php
namespace App\Http\Controllers;
use App\Category;
use App\Custom;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getListNews(){
        $news = News::all();
        return view('admin.news.list', compact('news'));
    }
    public function getAddNews(){
        $category = Category::all();
        return view('admin.news.add',compact('category'));
    }
    public function postAddNews(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
        ],[
            'title.required' => 'Vui lòng nhập tiêu đề',
            'content.required' => 'Vui lòng nhập nội dung',
        ]);
        $news = new News;
        $custom = new Custom;
        $news->title = $request->title;
        $news->title_sale = strtolower($custom->convert_vi_to_en($request->title));
        $news->category_id = $request->category;
        $news->content = $request->content;
        $news->active = 1;
        $news->display_home = 1;
        if($request->hasFile('imgnews'))
        {
            $file = $request->file('imgnews');
            $duoihinh = $file->getClientOriginalExtension();
            if($duoihinh != 'jpg' && $duoihinh != 'png' && $duoihinh != 'jpeg')
            {
                return redirect('admin/news/add')->with('success','Hình ảnh không đúng định dạng');
            }
            $nameimage = $file->getClientOriginalName();
            $hinh = str_random(3)."_".$nameimage;
            while (file_exists("page/images/".$hinh)) {
                $hinh = str_random(3)."_".$nameimage;
            }
            $file->move("page/images",$hinh);
            $news->image = $hinh;
        }
        else
        {
            return redirect('admin/news/add')->with('success','Vui lòng chọn hình Tin');
        }
        $news->save();
        return redirect('admin/news/add')->with('success','Thêm mới thành công');
    }
}