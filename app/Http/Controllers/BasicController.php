<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Message;


class BasicController extends Controller
{
    public function about() {return view('static.about');}
    public function home() {return view('static.home');}
    public function contact() {return view('static.contact');}
    // Перед тем как запустить метод submit, Laravel смотрит на его сигнатуру через внутренний механизм PHP (Reflection API):
    // Он "читает" типы аргументов: видит запись ContactRequest $request.   
    // Он понимает: "Ага! Этому методу для работы нужен объект класса ContactRequest в данном случае $request нужен  validated() ($request->validated())"
    public function submit(ContactRequest $request) {
        $request->validated();
        $massage = new Message();
        $massage->name = $request->input('name');
        $massage->email = $request->input('email');
        $massage->text = $request->input('message');
        $massage->save();
        return redirect()->route('home');
    }

}
