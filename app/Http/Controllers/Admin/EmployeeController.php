<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Events\ActivityLogged;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;


class EmployeeController extends Controller
{
    /**
     * The constructor function sets middleware permissions for specific employee actions in a PHP class.
     */
    public function __construct()
    {
        $this->middleware('permission:view employee|create employee|show employee|edit employee|delete employee')->only(['index', 'create', 'show', 'edit', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.employee.index', ['employees' => Admin::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.employee.create', ['roles' => Role::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $employee = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $employee->syncRoles($request->roles);

        event(new Registered($employee));
        event(new ActivityLogged('employee created', $employee));

        return redirect()->back()->with('success', 'employee created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.pages.employee.show', [
            'employee' => Admin::find($id),
            'roles' => Role::get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.employee.edit', [
            'employee' => Admin::find($id),
            'roles' => Role::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $employee): RedirectResponse
    {
        $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:' . Admin::class . ',email,' . $employee->id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        $employee->update([
            'name'     => $request->name ? $request->name  : $employee->name,
            'email'    => $request->email ? $request->email : $employee->email,
            'password' => $request->password ? Hash::make($request->password) : $employee->password,
        ]);

        if ($request->roles) {
            $employee->syncRoles($request->roles);
        }

        event(new ActivityLogged('employee updated', $employee));

        return redirect()->back()->with('success', 'employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Admin::findOrFail($id);
        $employee->delete();

        event(new ActivityLogged('employee deleted', $employee));

        // return redirect()->back()->with('success', 'employee deleted successfully');
    }
}
