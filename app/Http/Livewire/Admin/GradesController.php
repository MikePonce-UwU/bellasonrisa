<?php

namespace App\Http\Livewire\Admin;

use App\Models\Grade;
use Livewire\Component;

class GradesController extends Component
{
    public function render()
    {
        return view('livewire.admin.grades-controller', [
            'grades' => Grade::all(),
        ])->extends('layouts.app', ['pageName' => 'Listado de grados']);
    }
}
