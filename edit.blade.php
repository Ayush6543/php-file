<h2>Edit Personal Info</h2>
<form action="{{ route('personal.update', $info->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $info->name }}" required><br><br>
    <input type="email" name="email" value="{{ $info->email }}" required><br><br>
    <input type="number" name="age" value="{{ $info->age }}" required><br><br>
    <input type="text" name="mobile" value="{{ $info->mobile }}" required><br><br>
    <button type="submit">Update</button>
</form>