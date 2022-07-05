<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use App\Models\Contact;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;
class ContactController extends Controller
{
   public function contact()
   {
       return view('contact-us');
   }



   public function SendEmail(Request $request)
   {
       $details =[
           'name' =>  $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'message' => $request->message,
           'adresse' => $request->adresse,
       ];
       
       $contact=new Contact();
       $contact->name=$request->name;
       $contact->email=$request->email;
       $contact->phone=$request->phone;
       $contact->message=$request->message;
       $contact->adresse=$request->adresse;
       $contact->save();
       $basic  = new \Vonage\Client\Credentials\Basic("ecfb6017", "UXJ6URw8rMTdtNvj");
$client = new \Vonage\Client($basic);
       $response = $client->sms()->send(
           new \Vonage\SMS\Message\SMS("21654104916", BRAND_NAME, 'le client '. $request->name . ' demande service: ' . $request->message)
       );
       
       $message = $response->current();
      
       
       if ($message->getStatus() == 0) {
           echo "le message a été envoyè avec success\n";
       } else {
           echo "le message n'ètè pas envoyè avec status: " . $message->getStatus() . "\n";
       }

     Mail::to('ilhemmadani29@gmail.com')->send(new ContactMail($details));
   return back()->with('message_sent','le message a été envoyè avec success');
    }

}
