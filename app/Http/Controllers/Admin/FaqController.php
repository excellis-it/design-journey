<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faqs = Faq::orderBy('id', 'DESC')->get();
        return view('admin.faq.list',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:250',
            'answer' => 'required',
        ]);
        $faq_save = new Faq;
        $faq_save->question = $request->question;
        $faq_save->answer = $request->answer;
        $faq_save->save();

        return redirect()->route('faqs.index')->with('message','Faq added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function editFaq($id)
    {
        $faq = Faq::find($id);
        return view('admin.faq.edit',compact('faq'));
    }

    public function deleteFaq($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->route('faqs.index')->with('error','Faq deleted successfully');
    }

    public function updateFaq(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:250',
            'answer' => 'required',
        ]);
        $faq = Faq::find($request->id);
        $faq->question = $request->question;
        $faq->answer = $request->answer;
        $faq->update();

        return redirect()->route('faqs.index')->with('message','Faq updated successfully');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
