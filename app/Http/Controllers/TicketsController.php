<?php

namespace TeachMe\Http\Controllers;



class TicketsController extends Controller
{
    public function latest()
    {
        return view('tickets/list');
    }

    public function popular()
    {
        dd('popular');
    }

    public function open()
    {
        dd('pendientes');
    }

    public function closed()
    {
        dd('tutoriales');
    }

    public function details($id)
    {
        return view('tickets/details');
    }
}
