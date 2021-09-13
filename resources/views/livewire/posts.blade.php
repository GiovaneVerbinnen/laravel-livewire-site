<div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">
        Add Post
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Save Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @livewire('post-form')
                </div>
            </div>
        </div>
    </div>
   <div>
       <br>
       @if ($posts->count())
       <table class="table table-striped">
           <thead>
               <th>Titulo</th>
               <th>Descrição</th>
           </thead>
           <tbody>
              @foreach ($posts as $item)
              <tr>
               <td>{{ $item->title }}</td>
               <td>{{ $item->content }}</td>
           </tr>
              @endforeach
           </tbody>
       </table>

       {{ $posts->links() }}
   @endif
   </div>
</div>
