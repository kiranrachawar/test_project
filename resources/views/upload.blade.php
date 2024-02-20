<h1>FILE UPLOAD</h1>

<form action="upload" method="POST" enctype="multipart/form-data">
  @csrf
    <input type="file" name="file">
    <button type="submit">Submit</button>
</form>