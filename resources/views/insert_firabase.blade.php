<form action=" {{route('post.insert')}} " method="post" enctype="multipart/form-data" >
    @csrf
    <label>name</label>
    <input type="text" name="tittle"> <br>
    <label>content</label>
    <input type="text" name="contents"><br>
    <label>description</label>
    <input type="text" name="mm"><br>
    <button type="submit">nhập</button>
</form>
