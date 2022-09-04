<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customerDetails;

class adminController extends Controller
{
    function formIndex(){
        return view('admin/formIndex');
    }
    function formList(){
        $customerDetails = customerDetails::all();
        return view('admin/formList',compact('customerDetails'));
    }
    function formListEdit($id){
        $customerDetails = customerDetails::find($id);
        return view('admin/formListEdit',compact('customerDetails'));
    }
    function formListDelete($id){
        $customerDetails = customerDetails::find($id);
        $customerDetails->delete();
        return redirect('/');
    }

    public function formFullView($id)
    {
        $customerDetails = customerDetails::find($id);
        return view('admin/formFullView',compact('customerDetails'));
    }

    public function formprint($id)
    {
        $customerDetails = customerDetails::find($id);
        return view('admin/formprint',compact('customerDetails'));
    }
    public function saveCustomer(Request $request){
        $customer = new customerDetails();
        $name_prefix = $request->input('name_prefix');
        $name = $request->input('name');
        $customer->name = $name_prefix.$name;
        $customer->mid = $request->input('mid');
        $customer->age = $request->input('age');
        $customer->gender = $request->input('gender');

        $customer->phone_number = $request->input('phone_number');
        $customer->whatsapp_number = $request->input('whatsapp_number');
        $customer->email = $request->input('email');

        $family_name = $request->input('family_name');
        $family_relationship = $request->input('family_relationship');
        $family_number = $request->input('family_number');
        $family_email = $request->input('family_email');
        $alakal_member = $request->input('alakal_member');

        $Family_list = array($family_name, $family_relationship, $family_number, $family_email, $alakal_member);

        $customer->family_members = json_encode($Family_list);
        

        $customer->month_year = $request->input('month_year');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $customer->contribution = $start_date. ' to ' .$end_date;
        $customer->donation = $request->input('donation');
        $customer->details = $request->input('details');
        $customer->description = $request->input('description');
        $customer->save();
        return redirect('/');

    }

    public function formListUpdate(Request $request,$id){
        $customer = customerDetails::find($id);
        $name_prefix = $request->input('name_prefix');
        $name = $request->input('name');
        $customer->name = $name_prefix.$name;
        $customer->mid = $request->input('mid');
        $customer->age = $request->input('age');
        $customer->gender = $request->input('gender');

        $customer->phone_number = $request->input('phone_number');
        $customer->whatsapp_number = $request->input('whatsapp_number');
        $customer->email = $request->input('email');

        $family_name = $request->input('family_name');
        $family_relationship = $request->input('family_relationship');
        $family_number = $request->input('family_number');
        $family_email = $request->input('family_email');
        $alakal_member = $request->input('alakal_member');

        $Family_list = array($family_name, $family_relationship, $family_number, $family_email, $alakal_member);

        $customer->family_members = json_encode($Family_list);
        

        $customer->month_year = $request->input('month_year');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $customer->contribution = $start_date. ' to ' .$end_date;
        $customer->donation = $request->input('donation');
        $customer->details = $request->input('details');
        $customer->description = $request->input('description');
        $customer->save();
        return redirect('/');

    }
}
