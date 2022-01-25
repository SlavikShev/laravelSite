<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostCategoryController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index() {
        // todo select raw data
        $categories = PostCategory::select('id','title','parent_id')->where('id','!=',1)->paginate(5);
        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create() {
        // todo set only id and title
        $categories = PostCategory::all();
        return view('categories.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request) {
        $data = $request->all();

        $result = PostCategory::create([
            'title' => $data['title'],
            'parent_id' => $data['parent_id'],
        ]);
        if ($result)
            return redirect()
                ->route('admin.categories.posts.edit', $result->id)
                ->with(['success' => 'Категория успешно сохранена']);
        else
            return back()
                ->withErrors(['error'=>'Ошибка при сохранении'])
                ->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function edit($id) {
        $parent_categories = PostCategory::select('id','title')->where('id','!=',"$id")->get();
        $category = PostCategory::find($id);
        return view('categories.edit', compact('category','parent_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(Request $request, $id) {
        $data = $request->all();
        $category = PostCategory::find($id);
        $category->update([
            'parent_id' => $data['parent_id'],
            'title' => $data['title'],
        ]);
        return redirect()
            ->route('admin.categories.posts.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
