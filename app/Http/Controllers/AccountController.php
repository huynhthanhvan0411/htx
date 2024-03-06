<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function listAccount()
    {
        $accounts = Account::paginate(10);
        return view('admin.account.adminAccount', compact('accounts'));
    }
    public function addAccount()
    {
        return view('admin.account.addAccount');
    }
    //editAccount
    public function edit($id)
    {
        $account = Account::findOrFail($id);
        return view('admin.account.editAccount', compact('account'));
    }
    //update
    public function updateDemo(Request $request, $id)
    {
        // Validate input data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:account,email,' . $id,
            'phone' => 'required|digits_between:8,10|regex:/^[0-9]+$/',
            'address' => 'required|string',
            'role' => 'required|in:1,2',
            'status' => 'required|in:0,1',
        ]);

        // Find the account by ID
        $account = Account::findOrFail($id);

        // Update account details
        $account->name = $request->name;
        $account->email = $request->email;
        $account->phone = $request->phone;
        $account->address = $request->address;
        $account->role = $request->role;
        $account->status = $request->status;

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Upload new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('source/images/account'), $imageName);
            // Delete old image if exists
            if ($account->image) {
                unlink(public_path('source/images/account/' . $account->image));
            }
            $account->image = $imageName;
        }

        // Check if password is provided and update it
        if ($request->filled('password')) {
            $password = Hash::make($request->password);
            $account->password = $password;
        }

        // Save the changes to the database
        $account->save();

        // Redirect with success message
        return redirect()->route('listAccount')->with('success', 'Account updated successfully!');
    }
    //search
    public function search(Request $request)
    {
        $search = $request->input('accountSearch');
        $accounts = Account::where('name', 'like', "%$search%")
            ->orWhere('id', $search)
            ->get();
        return view('admin.account.adminAccount', compact('accounts'));
    }
    //delete
    public function delete($id)
    {
        $account = Account::findOrFail($id);
        $account->delete();
        return redirect()->route('listAccount')->with('success', 'Account deleted successfully!');
    }
    public function storeDemo(Request $request)
    {
        // Validate input data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:account',
            'phone' => 'required|digits_between:8,10|regex:/^[0-9]+$/',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password',
            'address' => 'required|string',
            'role' => 'required|in:1,2',
            'status' => 'required|in:0,1',
        ]);

        // Hash password
        $password = Hash::make($request->password);

        // Upload image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('source/images/account'), $imageName);

        // Create new account
        $account = Account::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $imageName,
            'password' => $password,
            'address' => $request->address,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        // Redirect
        if ($account) {
            return redirect()->route('listAccount')->with('success', 'Account created successfully!');
        } else {
            return back()->withInput()->with('error', 'Failed to create account!');
        }
    }
}
