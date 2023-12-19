<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class CustomerController extends Controller
{

    


public function updateProfile(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'string|max:255',
        'email' => 'email|unique:users,email,' . auth()->user()->id,
        'password' => 'nullable|string|min:6',
        'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Update user information
    $user = auth()->user();
    $user->name = $request->input('name');
    $user->email = $request->input('email');

    // Update password if provided
    if ($request->filled('password')) {
        $user->password = Hash::make($request->input('password'));
    }

    $user->save();

    // Update customer information
    $customer = $user->customer;

    // Handle profile picture update
    if ($request->hasFile('file')) {
        // Delete the old profile picture if it exists
        if ($customer->foto_profil) {
            Storage::delete('public/' . $customer->foto_profil);
        }

        // Store the new profile picture in the storage/image_profil directory
        $imagePath = $request->file('file')->storeAs('public/image_profil', $request->file('file')->getClientOriginalName());
        $customer->foto_profil = 'image_profil/' . $request->file('file')->getClientOriginalName();
    }

    $customer->save();

    return redirect()->back()->with('success', 'Profile updated successfully');
}

    
    
}
