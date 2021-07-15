<?php

namespace App\Http\Livewire\Checks;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;

class IndexChecks extends Component
{

    public $edit = false;
    public $User;
    public $SelectedArray = [];

    public function render()
    {
        return view('livewire.checks.index-checks',[
            'users' => User::all(),
            'tasks' => Task::all(),
        ])->layout('layouts.app');
    }


    

    public function example()
    {
        dd('joadf');
    }


    public function CreateUser()
    {        
        try {
            $user = new User();
            $user->name = Str::random(10);
            $user->email = Str::random(10) . "@exmaple.com";
            $user->password = Hash::make('password');
            $user->save();            

        } catch (\Throwable $th) {

            dd($th->getMessage());

        }
    }

    public function edit($id)
    {

        $this->reset('SelectedArray');

        $this->User = User::find($id);
        $Selected = $this->User->task->pluck('id')->toArray();

        foreach ($Selected as $item) {
            $this->SelectedArray[$item] = $item;

        }

        $this->edit = true;
    }

    public function update()
    {

        foreach ($this->SelectedArray as $key => $item) {
            if ($key == $item) {
                $Array[] = $item;
            }
        }

        if( empty($Array) ){
            $this->User->task()->detach();    
        }else{
            $this->User->task()->sync($Array);
        }
                
        $this->SelectedArray = [];
        $this->edit = false;
    }
}
