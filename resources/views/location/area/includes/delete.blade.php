<form action="{{ route('admin.data.location.area.destroy', [$state, $area]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
