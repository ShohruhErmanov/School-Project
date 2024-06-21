<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Slider;
use App\Models\Pedagogical;
use App\Models\Message;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\Document;
use App\Models\Leader;
use App\Models\Holiday;

class MainController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->limit(8)->get();
        $posts = Post::latest()->limit(3)->get();
        $messages = Message::latest()->get();
        $pedagogicals = Pedagogical::all();
        $sliders = Slider::all();
        $teachers = Teacher::latest()->limit(4)->get();
        return view('index', compact('teachers', 'sliders', 'pedagogicals', 'messages', 'posts', 'galleries'));
    }

    public function about()
    {
        $pedagogicals = Pedagogical::all();
        return view('about', compact('pedagogicals'));
    }

    public function achievement()
    {
        return view('achievement');
    }

    public function documents()
    {
        $documents = Document::latest()->paginate(8);
        return view('document', compact('documents'));
    }

    public function leadership()
    {
        $leaders = Leader::all();
        return view('leadership', compact('leaders'));
    }

    public function teacher()
    {
        $teachers = Teacher::paginate(8);
        return view('teacher', compact('teachers'));
    }

    public function news()
    {
        $posts = Post::latest()->paginate(8);
        return view('news', compact('posts'));
    }

    public function holiday()
    {
        $holidays = Holiday::latest()->paginate(8);
        return view('holiday', compact('holidays'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function message(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'contact' => 'required',
            'message' => 'required',
         ]);

        $requestData = $request->all();

        Message::create($requestData);
        return redirect()->route('index');
    }

    public function getmessage()
    {
        $messages = Message::latest()->paginate(10);
        return view('admin.message.index', compact('messages'));
    }
}
