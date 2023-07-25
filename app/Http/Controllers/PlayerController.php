<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Player;
use App\Models\Post;
use Faker\Guesser\Name;
use App\Http\Controllers\Session;
use App\Models\Teams;
use Illuminate\Http\Request;
use PDO;

class PlayerController extends Controller
{
    public function index()

    {
        $players = Player::all();
         $players = Player::with('teams')->get();
         $teams = Teams::with('playerWithTeam')->get();
         $posts = Post::with('categories')->get();
         $categories = Category::with('post')->get();
        //  return $categories;
        // return $posts;
        // return $players;
        // return $teams;
        // return view('index' , compact('players'));
        // return view('index' , compact('teams'));
        return view('index' , compact('categories'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    
    {
        $rules = [
            'name' => 'required|max:10',
            'gender' => 'required',
            'city' => 'required'
        ];

        $this->validate($request, $rules);

        $players = new Player();
        $players->name = $request->name;
        $players->gender = $request->gender;
        $players->city = $request->city;
        $players->save();

        return redirect('/')->with('msg', 'Task was successful!');
        
    }

    public function delete($id=null){
        $deletePlayer = Player::find($id);
        $deletePlayer->delete();
        return redirect('/')->with('msg', 'Delete was successful!');

    }
    public function update($id=null){
        $updatePlayer = Player::find($id);
        return view('update', compact('updatePlayer') );

    }

    public function updateStore(Request $request, $id)
    
    {
        $rules = [
            'name' => 'required|max:10',
            'gender' => 'required',
            'city' => 'required'
        ];

        $this->validate($request, $rules);

        $players = Player::find($id);
        $players->name = $request->name;
        $players->gender = $request->gender;
        $players->city = $request->city;
        $players->save();

        
        return redirect('/')->with('msg', 'Data Update was Successful!');
        
    }

    public function search(Request $request){
        $data = Category::where('name' , 'like', '%'.$request->data.'%')->get();
        // return view('update', compact('data') );
        dd($data);
        // return $data;
    }
}
