<h1>ADD EMPLOYEES</h1>

<form action="addemp" method="POST">
    @csrf
    <div class="col-md-3">
        <label for="name">Name</label><br>
        <input type="text" name="name" class="form-control">
    </div><br>
    <div class="col-md-3">
        <label for="age">Age</label><br>
        <input type="text" name="age" class="form-control">
    </div><br>
    <div class="col-md-3">
        <label for="salary">Salary</label><br>
        <input type="text" name="salary" class="form-control">
    </div><br>
    <div class="col-md-3">
        <label for="City">City</label><br>
        <input type="text" name="city" class="form-control">
    </div><br>
    <input type="submit" value="Save">
</form>