<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
// use App\Http\Controllers\AdminController

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {    
        return  view('admin/home');
    }

    public function saveData (Request $request)
    {   
        $dump($request->all());
        $this->validate($request,[
            'title'=>'required|max:255',
         //   'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'text'=>'required',
        ]);
        $imageName = time().'.'.$request->slideimage1->getClientOriginalExtension();
        $request->slideimage1->move(public_path('images'), $imageName);
        var_dump($request);
        $data=$request->all();
      dump($data);
        $aticle=new Article;
        $aticle->fill($data);
        // $slideImage1 = $request->slideimage1;
        $slideImage1 = $request->file('slideimage1');
        
        if($slideImage1 === Null) {
            $slideImage1 = '';
        }
        // var_dump($slideImage1);
        $slideImage2 = $request->get('slideimage2');
        if($slideImage2 === Null) {
            $slideImage2 = '';
        }

        $slideImage3 = $request->get('slideimage3');
        if($slideImage3 === Null) {
            $slideImage3 = '';
        }
        $clientImage1 = $request->get('clientimage1');
        if($clientImage1 === Null) {
            $clientImage1 = '';
        }
        $clientImage2 = $request->get('clientimage2');
        if($clientImage2 === Null) {
            $clientImage2 = '';
        }
        $clientImage3 = $request->get('clientimage3');
        if($clientImage3 === Null) {
            $clientImage3 = '';
        }
        $client1 = $request->get('client1');
        if($client1 === Null) {
            $client1 = '';
        }
        $client2 = $request->get('client2');
        if($client2 === Null) {
            $client2 = '';
        }
        $client3 = $request->get('client3');
        if($client3 === Null) {
            $client3 = '';
        }        
      
        // preg_match("/data:image\/(.*?);/",$slideImage1,$image_extension); // extract the image extension
        // $slideImage1 = preg_replace('/data:image\/(.*?);base64,/','',$slideImage1); // remove the type part
        // $slideImage1 = str_replace(' ', '+', $slideImage1);
        // $imageName = 'image_' . time() . '.' . $image_extension[1]; //generating unique file name

        // $image = $request->file('slideimage1');
        // $image = base64_encode($slideImage1);
        // var_dump(preg_match("/data:image\/(.*?);/",$slideImage1,$image_extension));
        // if ($slideImage1 != "") { // storing image in storage/app/public Folder
        //     Storage::disk('public')->put($file_name, base64_decode($slideImage1));
        //     var_dump(Storage::disk('public')->put($file_name, base64_decode($slideImage1)));
        // }

        // $filePath = str_replace('public/', '', $file->storeAs('public/dir', 'name.' . $file->guessExtension()))
        // var_dump($slideImage1);
        // echo "dfdf".$slideImage2.$slideImage3;
        // if($slideImage1 !== Null || $slideImage2 !== Null ){

            Home::create([
                'SlideImage1' => $slideImage1,
                'SlideImage2' => $slideImage2,
                'SlideImage3' => $slideImage3,
                'TestimonialImage1' => $clientImage1,
                'TestimonialImage2' => $clientImage2,
                'TestimonialImage3' => $clientImage3,
                'TestimonialClient1' => $client1,
                'TestimonialClient2' => $client2,
                'TestimonialClient3' => $client3,
            ]);
        // }
        
        return view('admin/home');
    }

    public function getData(Request $request)
    {    
        $last = DB::table('homes')->latest('created_at')->first();

        return  response()->json($last);
    }
}
