<?php

namespace App\Http\Controllers;

use App\portfolio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('stylist');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfols = Auth::user()->stylist->portfolios->sortByDesc('id');
        return view('portfolio', compact('portfols'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('after') and $request->hasFile('before')) {

            Auth::user()->stylist->portfolios()->create([
                'client_purpose' => $request->input('purpose'),
                'comment' => $request->input('comments'),
                'updated_at' => new Carbon($request->input('date') . '00:00:00'),
                'picture_before' => Storage::url(Storage::putFile('public/portfolio', $request->file('before'))),
                'picture_after' => Storage::url(Storage::putFile('public/portfolio', $request->file('after'))),
            ]);
            $request->session()->flash('success', 'Портфолио добавлено');
            return redirect('portfolio');
        } else {
            $request->session()->flash('success', 'Ошибка');
            return redirect('portfolio');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
