<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class HomeControlle extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function upload(Request $request)
    {
        $data = new book();
        $data->bookName = $request->b_name;


        $upImage = $request->b_img;
        if ($upImage) {
            $updata = time() . '.' . $upImage->getClientOriginalExtension();
            $request->b_img->move('image', $updata);

            $data->bookImage = $updata;
        }

        $uppdf = $request->book;
        if ($uppdf) {
            $updocdata = time() . '.' . $uppdf->getClientOriginalExtension();
            $request->book->move('doc', $uppdf);

            $data->bookPdf = $updocdata;
        }


        $data->save();
        return redirect()->back();
    }

    public function user(){
        $data = book::all();
        return view('user.index',compact('data'));
    }
    public function opp(){
        $data = book::all();
        return view('admin.opp',compact('data'));
    }
    public function delete($id){
        $deleteitem = book::find($id);
        $deleteitem->delete();
        return redirect()->back();
    }

    public function update($id){
        $updateBook = book::find($id);
        return view('admin.update',compact('updateBook'));
    }
    public function serchfun(Request $request){
        $search = $request->search;
        $data = book::where('bookName','like','%'.$search.'%')->get();

        return view('user.index',compact('data'));
    }


    public function newupdatedata(Request $request, $id)
    {
        $newbook = book::find($id);
        $newbook->bookName=$request->newBookName;

        $image = $request->newImage;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->newImage->move('image', $imagename);
            $newbook->bookImage = $imagename;
        }

        $uppdf = $request->newBook;
        if ($uppdf) {
            $updocdata = time() . '.' . $uppdf->getClientOriginalExtension();
            $request->newBook->move('doc', $updocdata);

            $newbook->bookPdf = $updocdata;
        }


        $newbook->save();
        return redirect()->back();
    }
}
