<script type="text/javascript" src="./js/main.js"></script>
<div class="modal fade" id="form_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5> 
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form id="category_form" onsubmit="return false">
  <!--<div class="mb-3">-->
    <label >Category</label>
     <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp" placeholder="Enter category">
      <small id="cat_error" class="form-text text-muted"></small>
   
  <!--</div>-->
  <div class="mb-3">
    <label for="exampleInputPassword1" >Parent Category</label>
    <select class="form-control" id="parent_cat" name="parent_cat">

      <option value="0">Root</option>

    </select>
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>