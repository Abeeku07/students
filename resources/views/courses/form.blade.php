
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->


    <form class="container-sm" action="{{$action}}" method="POST">
  <div class="mb-3">
    <label for="text" class="form-label"> Enter Course Name</label>
    <input type="text" name="name" class="form-control" >
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </div>
  

  
</form>

