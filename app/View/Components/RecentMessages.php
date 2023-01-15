<?php

namespace App\View\Components;

use App\Models\ChMessage;
use Illuminate\View\Component;

class RecentMessages extends Component
{

    public $messages;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // get all users that received/sent message from/to [Auth user]
        $this->messages = ChMessage::join('users',  function ($join) {
            $join->on('ch_messages.from_id', '=', 'users.id')
                ->orOn('ch_messages.to_id', '=', 'users.id');
        })
        ->where(function ($q) {
            $q->where('ch_messages.from_id', auth()->user()->id)
            ->orWhere('ch_messages.to_id', auth()->user()->id);
        })
        ->where('users.id','!=',auth()->user()->id)
        ->select('users.*', \DB::raw('MAX(ch_messages.created_at) max_created_at'))
        ->orderBy('max_created_at', 'desc')
        ->groupBy('users.id')
        ->limit(3)
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.recent-messages');
    }
}
