<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Gallery;
use App\Models\Likes;
use App\Models\User;
use App\Models\Vote;

class GalleryController extends Controller
{
    public function index(){
        $favourites = Gallery::orderBy('views','asc')->take(5)->get();

        return view('ObscuraExibition.page.landing',[
            'title' => 'OBSCURA EXHIBITION',
            'favourites' => $favourites,
        ]);
    }

    public function gallery(){
        $galleries = Gallery::with(['like','vote'])->get();
        $galleryLike = Gallery::withCount('like')->orderBy('like_count','desc')->get();
        $galleryView = Gallery::orderBy('views','desc')->get();
        $galleryShuffle = Gallery::inRandomOrder()->get();
        $galleryNewest = Gallery::orderBy('created_at','desc')->get();
        $galleryOldest = Gallery::orderBy('created_at','asc')->get();



        return view('ObscuraExibition.page.gallery',[
            'title' => 'GALLERY EXHIBITION',
            'gallery' => $galleries,
            'galleryLike' => $galleryLike,
            'galleryView' => $galleryView,
            'galleryShuffle' => $galleryShuffle,
            'galleryNewest' => $galleryNewest,
            'galleryOldest' => $galleryOldest,
        ]);
    }

    public function filter(Request $request){
        $galleries = Gallery::withCount('like')->orderBy('like_count','desc')->get();
        $req = $request['type'];

        if($req == 'like'){
            return view('ObscuraExhibition.page.gallery',[
                'gallery' => $galleries,
            ]);
        }

    }

    public function getLike(Request $request){
        $galleryID = $request['galleryID'];

        $like = Likes::where('gallery_id', $galleryID)->count();

        $params = [
            'like' => $like,
        ];

        return response()->json($params);
    }

    public function getViews(Request $request){
        $gallery = Gallery::find($request['galleryID']);
        
        $views = $gallery['views'];

        $gallery->fill([
            'views' => $views + 1,
        ]);

        $gallery->save();
    }

    public function knowLike(Request $request){
        $userID = $request['userID'];
        $galleryID = $request['galleryID'];

        $like = Likes::where('user_id', $userID)->where('gallery_id', $galleryID)->get();
        $count = count($like);

        $params = [
            'data' => $count
        ];

        return response()->json($params);
    }

    public function addLike(Request $request){
        $userID = $request['userID'];
        $galleryID = $request['galleryID'];

        Likes::create([
            'user_id' => $userID,
            'gallery_id' => $galleryID
        ]);

        $like = Likes::where('gallery_id', $galleryID)->count();

        $params = [
            'like' => $like,
        ];

        return response()->json($params);

    }

    public function deleteLike(Request $request){
        $userID = $request['userID'];
        $galleryID = $request['galleryID'];

        Likes::where('user_id',$userID)->where('gallery_id',$galleryID)->delete();

        $like = Likes::where('gallery_id', $galleryID)->count();

        $params = [
            'like' => $like,
        ];

        return response()->json($params);
    }

    public function knowVote(Request $request){
        $userID = $request['userID'];
        $galleryID = $request['galleryID'];

        $vote = Vote::where('user_id',$userID)->where('gallery_id',$galleryID)->get();
        $count = count($vote);

        $params = [
            'data' => $count,
        ];

        return response()->json($params);
    }

    public function addVote(Request $request){
        $userID = $request['userID'];
        $galleryID = $request['galleryID'];
        $user = User::where('id',$userID)->first();

        if($user->vote < 1){
            return response()->json(['message' => 'coin habis']);
        }else{
            Vote::create([
                'user_id' => $userID,
                'gallery_id' => $galleryID
            ]);
            
            $voteUpdate = $user->vote - 1;

            User::where('id',$userID)->update(['vote' => $voteUpdate]);
            
            return response()->json(['vote' => $voteUpdate]);
        }
    }
}
