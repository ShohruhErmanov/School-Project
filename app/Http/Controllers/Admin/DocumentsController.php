<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Document;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::latest()->paginate(8);
        return view('admin.document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.document.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'document' => 'required',
         ]);
         
         if ($request->hasFile('document')) {
            $file = $request->file('document');
            $document_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('file',  $document_name);
            $requestData['document'] = $document_name;
        }

        $requestData = $request->all();


        Document::create($requestData);
        return redirect()->route('admin.document.index')->with('seccess', 'File created saccessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('admin.document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
         ]);

         if ($request->hasFile('document')) {
            $file = $request->file('document');
            $document_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('file',  $document_name);
            $requestData['document'] = $document_name;
        }

        $requestData = $request->all();


        $document->update($requestData);
        return redirect()->route('admin.document.index')->with('seccess', 'File edited saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return redirect()->route('admin.document.index')->with('seccess', 'File deleted saccessfuly');
    }
}
