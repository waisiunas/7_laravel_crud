<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class DeletedCourseController extends Controller
{
    public function index()
    {
        return view('country.deleted', [
            'countries' => Country::onlyTrashed()->get(),
        ]);
    }

    public function restore($id)
    {
        if (Country::onlyTrashed()->find($id)->restore()) {
            return back()->with(['success' => 'Magic has been spelled!']);
        } else {
            return back()->with(['failure' => 'Magic has become shopper!']);
        }
    }

    public function delete($id)
    {
        if (Country::onlyTrashed()->find($id)->forceDelete()) {
            return back()->with(['success' => 'Magic has been spelled!']);
        } else {
            return back()->with(['failure' => 'Magic has become shopper!']);
        }
    }
}
