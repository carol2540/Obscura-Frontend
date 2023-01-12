<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;

class AdminController extends Controller
{
    public function index(){
        $gallery = Gallery::withCount('vote')->paginate(5);
        $ranking = Gallery::withCount('vote')->orderBy('vote_count','desc')->paginate(5);
        return view('ObscuraExibition.admin.adminPanel',[
            'gallery' => $gallery,
            'ranking' => $ranking
        ]);
    }

    public function view(){
        return view('ObscuraExibition.admin.addCompetitor');
    }

    public function store(Request $request){
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->hasFile('image')){
            $description_path = 'public/Images/Competition';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);
        }

        Gallery::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image_name,
            'views' => 0
        ]);

        return redirect('obscura-exhibition/admin-panel')->with(['success' => 'success']);
    }

    public function detail($id){
        $gallery = Gallery::find($id);
        return view('ObscuraExibition.admin.editCompetitor',[
            'gallery' => $gallery,
        ]);
    }

    public function edit(Request $request){
        $id = $request->id;
        $params = Gallery::find($id);

        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate);
        }

        if($request->hasFile('image')){
            $description_path = 'public/Images/Competition';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);
        }

        if($request->hasFile('image')){
            $description_path = 'public/Images/Competition';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $image->storeAs($description_path,$image_name);

            $params->fill([
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $image_name
            ]);
        }else{
            $params->fill([
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description
            ]);
        }

        $params->save();

        return redirect('obscura-exhibition/admin-panel')->with(['edit' => 'success']);
    }

    public function destroy(Request $request,$id){
        $gallery = Gallery::find($id);
        if($gallery){
            $gallery->delete();
            $request->session()->flash('status','delete');      
            return back();
        }else{
            return response(['message' => 'data tidak ada!']);
        }
    }
}
