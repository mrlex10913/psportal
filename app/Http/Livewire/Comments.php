<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Comments extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $newComment;
    public $image;


    public function updated($field){
        $this->validateOnly($field, [
            'newComment' => 'required|max:255'
        ]);
    }

    public function addComment(){
        $this->validate([
            'newComment' => 'required|max:255'
        ]);
        $addcomment = Comment::create([
            'body' => $this->newComment,
            'user_id' => 1
        ]);
        $this->newComment = "";  
        session()->flash('message', 'Comment added successfully');
    }

    public function remove($commentId){
        $comment = Comment::find($commentId);
        $comment->delete();
        session()->flash('delete', 'Comment deleted successfully');

    }
    public function render()
    {
        return view('livewire.comments',[
            'comments' => Comment::latest()->paginate(2)
        ]);
    }
}
