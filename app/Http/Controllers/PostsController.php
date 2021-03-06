<?php

namespace App\Http\Controllers;

Use App\Models\Vote;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;


class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Log::info('This is some useful information.');
        // Log::debug('Here is some information that will help me find an error');
        // Log::warning('Something could be going wrong.');
        // Log::error('Something is really going wrong.');
        // dd($posts->user->email);
        // $data['posts'] = Post::find(9);
    
        $data['posts'] = Post::with('user')->orderBy('created_at', 'desc')->paginate(5);
        // DB::table('posts')->orderBy('created_at', 'desc')->get();

        return view('posts.index')->with($data);
        

        // all posts that have 'lorem' in title
        // SELECT * FROM POSTS
            // WHERE title LIKE '%lorem%'
        // $posts = Post::where('column name', 'comparison', 'value');
        // $posts = Post::where('title', 'LIKE', '%lorem%')
        //                 ->orwhere('content', 'LIKE', '%lorem%')->get();
        // dd($posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $rules = [
            'title'   => 'required|min:5',
            'url'     => 'required',
            'content' => 'required',
        ];

        // $request->session()->flash('ERROR_MESSAGE', 'Post was not saved. Please see messages under inputs');
        // will redirect back with $errors object populated if validation fails
        $this->validate($request, $rules);
        // $request->session()->flash('SUCCESS_MESSAGE', 'Post was saveed successfully');
        // $request->session()->forget('ERROR_MESSAGE');




        $post = new Post;
        $post->created_by = $request->user()->id;
        $post->title = $request->get('title');
        $post->url = $request->get('url');
        $post->content = $request->get('content');
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');

        Log::info('Post was created.' . $post);
        return redirect()->action('PostsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $this->voteScore($id);
        $post = Post::findOrFail($id);
        $data = ['post' => $post];
        return view('posts.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $data = ['post' => $post];
        return view('posts.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;        
        $post->url = $request->url;        
        $post->content = $request->content;
        $post->save();

        $request->session()->flash('SUCCESS_MESSAGE', 'Post was saved successfully');

        return redirect()->action('PostsController@show', $post->id);       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->action('PostsController@index');
    }

    public function search(Request $request)
    {
        $term = $request->searchQuery;
        $data['results'] = Post::search($term)->paginate(5);
        return view('posts.results')->with($data);
    }

    public function vote(Request $request)
    {
        $vote = Vote::firstOrCreate(
                array(
                        'user_id' => $request->user()->id,
                        'post_id' => $request->get('postId'),
                    )
            );
        if ($request->get('voteValue') == 1){
            $vote->vote = 1;
        } else if ($request->get('voteValue') == 0){
            $vote->vote = 0;
        }
        
        $vote->save();

        return redirect()->action('PostsController@index');
    }

    // public function voteScore($id)
    // {
    //     // $post = Post::find(513);
    //     $post = Post::find($id);
    //     $data['post'] = $post;
    //     $data['votes'] = Vote::voteScore($post);
    //     dd($data['votes']);

    //     return view('posts.show')->with($data);
    // }

}
