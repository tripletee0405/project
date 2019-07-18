<?php

namespace App\Http\Controllers\Admin;

use App\Books;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DB::table('list_books')->select('*');
        $books = $books->get();

        $pageName = 'List Book';

        return view('/admin/list_book', compact('books', 'pageName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/add_book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = new Books;
        $books->name_book = $request->name_book; 
        $books->author_book = $request->author_book; 
        $books->amount = $request->amount; 
        $books->price_book = $request->price_book; 
        $books->image_book = $request->image_book; 
        $books->description_book = $request->description_book; 

        $books->save();
        return redirect()->action('Admin\AdminBookController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Books::where('id', '=', $id)->select('*')->first();
        return view('/admin/detail_book', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $books = Books::findOrFail($id);
        $pageName = 'Book - Update';
        return view('/admin/update_book', compact('books', 'pageName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $books = Books::find($id);
        $books->name_book = $request->name_book; 
        $books->author_book = $request->author_book; 
        $books->amount = $request->amount; 
        $books->price_book = $request->price_book; 
        $books->image_book = $request->image_book; 
        $books->description_book = $request->description_book; 

        $books->save();
        return redirect()->action('Admin\AdminBookController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Books::find($id);

        $books->delete();
        return redirect()->action('Admin\AdminBookController@index');
    }
}
