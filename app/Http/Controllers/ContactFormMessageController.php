<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactFormMessage;
use App\Http\Requests\ContactFormRequest;
use App\Events\MailEvent;
use Illuminate\Support\Facades\Mail;

class ContactFormMessageController extends Controller
{
    // public function index()
    // {
    //     $messages = ContactFormMessage::orderBy('created_at', 'desc')->take(5)->get();
    //     $unreadCount = ContactFormMessage::where('is_read', false)->count();

    //     return view('dashboard.dashboard', compact('messages', 'unreadCount'));
    // }

    public function show($id)
    {
        $message = ContactFormMessage::findOrFail($id);

        if (!$message->is_read) {
            $message->is_read = true;
            $message->save();
        }

        return view('messages.show', compact('message'));
    }

    public function destroy($id)
    {
        $message = ContactFormMessage::findOrFail($id);
        $message->delete();

        $message->deleted_at = now();
        $message->save();

        return redirect()->route('dashboard')->with('status', 'Message deleted successfully');
    }

    public function store(ContactFormRequest $request)
    {
        $message = new ContactFormMessage($request->validated());
        $message->save();

        MailEvent::dispatch($message);
        return redirect()->route('dashboard')->with('success', 'Message sent successfully');
    }
}
