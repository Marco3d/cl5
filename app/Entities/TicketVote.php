<?php

namespace TeachMe\Entities;



class TicketVote extends Entity
{
    // un voto pertenece a un ticket
    public function ticket()
    {
        return $this->belongsTo(Ticket::getClass());
    }

    // un voto pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::getClass());
    }

}
