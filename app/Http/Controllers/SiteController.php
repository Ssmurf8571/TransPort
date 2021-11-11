<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Models\ContactFormModel;
use Mail;
use App\Mail\OrderShipped;

class SiteController extends Controller
{
    public function default() {
        return redirect("/".config('app.locale'));
    }

    public function openPage($locale) {
        if (! in_array($locale, ['en', 'ru'])) {
            abort(404);
        }

        App::setLocale($locale);

        $data = DB::table('contact_data')->first();
        $slideshow = DB::table('slideshow')->get()->where('visible', 1);

        return view('index', ['data' => $data, 'slideshow' => $slideshow]);
    }

    public function post(Request $request) {
        $witcher=new ContactFormModel;
        
        $witcher->contact_name=$request->contact_name;
        $witcher->commodity=$request->commodity;
        $witcher->type=$request->type;
        $witcher->phone=$request->phone;
        $witcher->from=$request->from;
        $witcher->to=$request->to;
        $witcher->email=$request->email;
        $witcher->load=$request->load;
        $witcher->shipment=$request->shipment;
        $witcher->Notations=$request->Notations;

        $witcher->save();

        Mail::to("masterov.pochta@gmail.com")->send(new OrderShipped($witcher));


        return redirect('/');
    }
}
