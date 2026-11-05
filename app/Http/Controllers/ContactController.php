<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use SweetAlert2\Laravel\Swal;

class ContactController extends Controller
{
    public function index()
    {
        return view('contacts.index');

    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:20',
            'notes' => 'nullable|string|max:1000'
        ], [
            'name.required' => 'O nome é obrigatório',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'Formato de email inválido',
            'email.unique' => 'Este email já está cadastrado',
            'phone.required' => 'O telefone é obrigatório',
            'phone.regex' => 'Formato de telefone inválido',
            'phone.min' => 'O telefone deve ter no mínimo 10 caracteres',
        ]);

        Contact::create($validated);
        // same as `Swal.fire()` in JS, same options: https://sweetalert2.github.io/#configuration
        Swal::fire([
            'title' => 'Contato criado com sucesso!',
            'text' => '',
            'icon' => 'success',
            'confirmButtonText' => 'Cool'
        ]);
        
        return redirect()->route('contacts.index')
            ->with('success', 'Contato criado com sucesso!');
    }

    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email,' . $contact->id,
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:20',
            'notes' => 'nullable|string|max:1000'
        ], [
            'name.required' => 'O nome é obrigatório',
            'email.required' => 'O email é obrigatório',
            'email.email' => 'Formato de email inválido',
            'email.unique' => 'Este email já está cadastrado',
            'phone.required' => 'O telefone é obrigatório',
            'phone.regex' => 'Formato de telefone inválido',
            'phone.min' => 'O telefone deve ter no mínimo 10 caracteres',
        ]);

        $contact->update($validated);
        
        return redirect()->route('contacts.index')
            ->with('success', 'Contato atualizado com sucesso!');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        
        return redirect()->route('contacts.index')
            ->with('success', 'Contato excluído com sucesso!');
    }
}
