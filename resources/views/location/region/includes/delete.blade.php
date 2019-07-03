<form action="{{ route('admin.data.location.region.destroy', $region) }}" method="POST" class="">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
