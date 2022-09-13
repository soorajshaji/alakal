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
        $customerDetails = customerDetails::all('id','mid','name','age','gender','phone_number');
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

    public function saveContribution(Request $request,$id)
    {
        $customer = customerDetails::find($id);
        $month_year = $request->post('month_year');
        $start_date = $request->post('start_date');
        $end_date = $request->post('end_date');
        $pay_date = $request->post('pay_date');
        $donation = $request->post('donation');
        $description = $request->post('description');
        $current_list = json_decode($customer->contribution);

           
            $current_list[0][] = $month_year;

            $current_list[1][] = $start_date;
            $current_list[2][] = $end_date;
            $current_list[3][] = $pay_date;

            $current_list[4][] = $donation;
            $current_list[5][] = $description;
        


        $customer->contribution = json_encode($current_list);
        $customer->save();
        return ["result"=>"inserted"];

        //return $request->post();
    
        //return redirect('/');
        //$customer = customerDetails::find($id);
        //$start_date = $request->input('start_date');
        //$end_date = $request->input('end_date');
       // $current_list = json_decode($customer->contribution);
        //dd($start_date);
        //$current_list[] = $start_date;
        //$current_list[] = $end_date;
        //$customer->contribution = json_encode($current_list);
       // dd($customer->contribution);
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
        

        $month_year = $request->input('month_year');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $pay_date = $request->input('pay_date');
        $donation = $request->input('donation');
        $description = $request->input('description');
        $contribution = array($month_year, $start_date,$end_date, $pay_date, $donation, $description);
        $customer->contribution = json_encode($contribution);
        
        $customer->details = $request->input('details');
        $customer->details2 = $request->input('details2');
        
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
        

        $month_year = $request->input('month_year');
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $pay_date = $request->input('pay_date');
        $donation = $request->input('donation');
        $description = $request->input('description');
        $contribution = array($month_year, $start_date,$end_date, $pay_date, $donation, $description);
        $customer->contribution = json_encode($contribution);
        
        $customer->details = $request->input('details');
        $customer->details2 = $request->input('details2');
        
        $customer->save();
        return redirect('/');

    }
}
