<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\user_comments;
use Illuminate\Http\Request;

use auth;

class PostDetailPage extends Component
{
    public $comment_content;

    public $make_comment=false;
    public function render()
    {
        return view('livewire.post-detail-page');
    }
    public function addcomment(Request $request){
        
    }

}
