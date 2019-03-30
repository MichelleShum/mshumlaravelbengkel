<ul>
    @foreach ($posts as $post)
    <a href="{{ route('posts.edit', $post)}}">
   {{ $post->title }}
</a>
   <li>
       
 <img width="60" src="{{ asset('storage/' .$post->image)}}" alt="">
</li>
    @endforeach 
</ul>

<a href="{{route('posts.create')}}">Add Post</a>