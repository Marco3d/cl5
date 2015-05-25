<?php

namespace TeachMe\Entities;



class Ticket extends Entity
{
    //protected $fillable = ['title', 'status', 'user_id'];

    public function author()
    {
        return $this->belongsTo(User::getClass());
    }




    //muchos comentarios pertenecen a un ticket

    public function comments()
    {
        return $this->hasMany(TicketComment::getClass());
    }


    public function voters()
    {
        return $this->belongsToMany(User::getClass(),'ticket_votes');
    }

    public function getOpenAttribute()
    {
        return $this->status == 'open';
    }

}
