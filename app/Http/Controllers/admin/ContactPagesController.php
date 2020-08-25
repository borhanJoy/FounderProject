<?php

namespace App\Http\Controllers\admin;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Sociallink;
use Illuminate\Http\Request;

class ContactPagesController extends Controller
{
//    admin contact us

    public function createContact()
    {
        return view('admin.contact.create',[
            'contacts'=>Contact::all()
        ]);

    }
    public function addContact(Request $request)
    {
//        $this->validate($request,[
//            'title'=>'required',
//            'phone'=>'required|min:11|numeric',
//            'email'=>'required|email|max:255',
//            'address'=>'required'
//        ]);
        Contact::saveContact($request);
        return back()->withSuccess('Save Successfully.');

    }
    public function updateContact(Request $request)
    {
        Contact::updateContact($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteContact(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->delete();
        return back()->withSuccess('Delete Successfully.');

    }
//    admin create social link

    public function createSocial()
    {
        return view('admin.contact.social.create',[
            'socials'=>Sociallink::all()
        ]);

    }
    public function addSocial(Request $request)
    {

        Sociallink::saveSocialLink($request);
        return back()->withSuccess('Save Successfully.');

    }
    public function updateSocial(Request $request)
    {
        Sociallink::updateSocialLink($request);
        return back()->withSuccess('Update Successfully.');

    }
    public function deleteSocial(Request $request)
    {
        $sociallink = Sociallink::find($request->id);
        $sociallink->delete();
        return back()->withSuccess('Delete Successfully.');

    }
}
