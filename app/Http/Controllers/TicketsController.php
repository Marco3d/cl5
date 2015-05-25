<?php

namespace TeachMe\Http\Controllers;



use TeachMe\Entities\Ticket;



class TicketsController extends Controller
{
    public function latest()
    {
        $tickets = Ticket::orderBy('created_at', 'DESC')->paginate(10);
        return view('tickets/list', compact('tickets'));
    }

    public function popular()
    {
        return view('tickets/list');
    }

    public function open()
    {
        $tickets = Ticket::where('status', 'open')->paginate(10);
        return view('tickets/open', compact('tickets'));
    }

    public function closed()
    {
        $tickets = Ticket::where('status', 'closed')->paginate(10);
        return view('tickets/closed', compact('tickets'));
    }

    public function ayuda()
    {
        return view('tickets/list');
    }

    public function details($id)
    {
       $ticket =  Ticket::findOrFail($id);
      /* $comments = TicketComment::select('ticket_comments.*', 'users.name')
                ->join('users','ticket_comments.user_id','=','users.id')
                ->where('ticket_id', $id)
                ->get();*/

        return view('tickets/details', compact('ticket'/*,'comments'*/));
    }
}
