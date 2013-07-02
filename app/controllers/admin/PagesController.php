<?php namespace App\Controllers\Admin;
 
use App\Models\Page;
use Input, Redirect, Sentry, Str;
 
class PagesController extends BaseController {
 
    public function index()
    {
        return View::make('admin.pages.index')->with('pages', Page::all());
    }
 
    public function show($id)
    {
        return View::make('admin.pages.show')->with('page', Page::find($id));
    }
 
    public function create()
    {
        return View::make('admin.pages.create');
    }
 
    public function store()
    {
        return 'Store';
    }
 
    public function edit($id)
    {
        return View::make('admin.pages.edit')->with('page', Page::find($id));
    }
 
    public function update($id)
    {
        return 'Update';
    }
 
    public function destroy($id)
    {
        return 'Destroy';
    }
 
}