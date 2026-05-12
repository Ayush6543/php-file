<h2>Add Personal Info</h2>
<form action="{{ route('personal.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="number" name="age" placeholder="Age" required><br><br>
    <input type="text" name="mobile" placeholder="Mobile" required><br><br>
    <button type="submit">Submit</button>
</form>