<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscription as Subscription;
use Validator;

class SubscriptionsController extends Controller
{
    public function index()
    {
        $Subscription = new Subscription;
        $subscriptions = $Subscription::all();
        return view('Admin.Subscriptions.subscriptions-dashboard',['subscriptions'=>$subscriptions]);
    }

    public function create()
    {
        return view('Admin.Subscriptions.create-subscription');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Subscription = new Subscription;
        $subscription = $Subscription::findOrFail($id);
        return view('Admin.Subscriptions.edit-subscription',['subscription'=>$subscription]);
    }

    public function update(Request $request, $id)
    {
        $Subscription = new Subscription;
        $rules =[
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'status' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
        }else {
            $subscription_to_update = $Subscription::findOrFail($id);
            $subscription_to_update->name = $request->get('name');
            $subscription_to_update->email = $request->get('email');
            $subscription_to_update->role = $request->get('role');
            $subscription_to_update->status = $request->get('status');
            if($subscription_to_update->save()){
                return redirect()->back()->with('msg', 'subscription has been successfully updated!');
            }else{
                return redirect()->back()->with('error', 'subscription could not be successfully updated!');
            }
        }
    }

    public function destroy($id)
    {
        $Subscription = new Subscription;
        $subscription_to_delete = $Subscription::firstOrFail('id',$id);
        $delete_subscription = $subscription_to_delete->delete();
        if($delete_subscription){
            return redirect()->back()->with('msg', 'subscription has been successfully deleted!');
        }else{
            return redirect()->back()->with('error', 'subscription could not be successfully deleted!');
        }
    }
}