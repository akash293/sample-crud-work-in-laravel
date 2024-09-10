<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;
use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        $data = Work::all();
        return view('index', compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'salary' => 'required',
            'experience' => 'required',
        ]);

        $data = Work::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'salary' => $request->salary,
            'experience' => $request->experience,
        ]);


        Toastr::success('User data saved successfully:)', 'Success!!');

        return redirect('index');


    }

    public function edit($id)
    {
        $data = Work::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Work::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'salary' => 'required',
            'experience' => 'required',
        ]);

        $data->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'salary' => $request->salary,
            'experience' => $request->experience,
        ]);



        Toastr::info('User data updated successfully:)', 'Success!!');

        return redirect('index');

    }

    public function delete($id)
    {
        $data = Work::findOrFail($id);
        $data->delete();

        Toastr::error('data deleted successfully!', 'Deleted!');

        return redirect('index');


    }
}
