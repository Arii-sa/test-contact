<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Symfony\Component\HttpFoundation\StreamedResponse;


class AuthController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        return view('contact', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {
        $contacts = $request->all();
        $category = Category::find($request->category_id);
        return view('confirm', compact('contacts','category'));
    }

    public function store(ContactRequest $request)
    {
        if ($request->has('back')){
            return redirect('/')->withInput();
        }

        $request['tell']=$request->tell_1 . $request->tell_2 . $request->tell_3;
        Contact::create(
            $request->only([
                'category_id',
                'first_name',
                'last_name',
                'gender',
                'email',
                'tell',
                'address',
                'building',
                'detail'
            ])
            );

            return view('thanks');
    }


    public function index()
    {
        return view('index');
    }
}
