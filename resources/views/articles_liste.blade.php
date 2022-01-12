<div class="col-md-8 offset-md-2 mt-4">

    <table class="table">
         <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
       
                </tr>
            </thead>
        <tbody>
            @foreach ($posts as $post)
              <tr>
                 <th scope="row">{{ $post->id }}</th> 
                 <td>"{{  $post->title }} </td>
                 <td>{{ $post->title }}</td>   
              </tr>    
            @endforeach
       </tbody>
    </table>
</div>  