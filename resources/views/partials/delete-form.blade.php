<form class="delete-form" action="{{route('comics.destroy', ['comic' => $comic->id])}}" method="POST">
    @csrf
    @method('DELETE')
    <button data-comic-title="{{ $comic->title }}" id="sweetAlert" class="btn btn-danger" data-confirm-delete="true"><i class="fa-solid fa-trash"></i></button>
</form>