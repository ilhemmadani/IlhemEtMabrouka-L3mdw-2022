<?php
namespace App\Repositories;

use App\Models\ {
    Product,
    
    Cart
};
use App\Services\Thumb;

class CartRepository
{
    /**
     * The Tag instance.
     *
     * @var \App\Models\Tag
     */
 
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;


    /**
     * Create a new BlogRepository instance.
     *
     * @param  \App\Models\Post $post
     * @param  \App\Models\Tag $tag
     * @param  \App\Models\Comment $comment
     */
    public function __construct(Cart $cart)
    {
        $this->model = $cart;
      
    }
 public function getAll($nbrPages, $parameters)
    {
        return $this->model->with ('ingoing')
            ->orderBy ($parameters['order'], $parameters['direction'])
            ->when ($parameters['valid'], function ($query) {
                $query->whereActive (true);
            })->when ($parameters['new'], function ($query) {
                $query->has ('ingoing');
            })->when (auth()->user()->role === 'auth', function ($query) {
                $query->whereHas('user', function ($query) {
                    $query->where('users.id', auth()->id());
                });
            })->paginate ($nbrPages);
    }
    
    /**
     * Update post.
     *
     * @param  \App\Models\Post  $post
     * @param  \App\Http\Requests\PostRequest  $request
     * @return void
     */
     public function update($cart, $request)
    {
    
      // $request->merge(['user_id' => auth()->id()]);
     

      $cart->update($request->all());

     
    }

   

    /**
     * Store post.
     *
     * @param  \App\Http\Requests\PostRequest  $request
     * @return void
     */
   

    /**
     * Save categories and tags.
     *
     * @param  \App\Models\Post  $post
     * @param  \App\Http\Requests\PostRequest  $request
     * @return void
     */
 public function store($request)
    {
        $request->merge(['user_id' => auth()->id()]);
        $request->merge(['active' => $request->has('active')]);

        $cart = Cart::create($request->all());

  
    }

    /**
     * Save categories and tags.
     *
     * @param  \App\Models\Post  $post
     * @param  \App\Http\Requests\PostRequest  $request
     * @return void
     */
    }