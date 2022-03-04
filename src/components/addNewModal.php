 <div class="modal" id="addNewModal">
     <div class="modal-dialog">
         <div class="modal-content">

             <!-- Modal Header -->
             <div class="modal-header">
                 <h4 class="modal-title">Add Product</h4>
                 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
             </div>

             <!-- Modal body -->
             <div class="modal-body">
                 <form>
                     <div class="row">
                         <label for=" user_name" class="form-label">Product Name</label>
                         <input type="text" class="form-control" id="newName" placeholder="Enter Product Name" name="name">
                     </div>
                     <div class="row">
                         <label for="name" class="form-label">Brand</label>
                         <input type="text" class="form-control" id="newBrand" placeholder="Enter Brand" name="brand">
                     </div>
                     <div class="row">
                         <label for="newCateg" class="form-label">Category</label>

                         <select class="form-control" id="newCateg" name="category">
                             <option value="faishion" name='category'>faishion</option>
                             <option value="electronics" name='category'>electronics</option>
                             <option value="appliances" name='category'>appliances</option>
                             <option value="furniture" name='category'>furniture</option>
                         </select>
                     </div>
                     <div class="row">
                         <label for="pwd" class="form-label">Price</label>
                         <input type="number" class="form-control" id="newPrice" placeholder="Enter Price" name="price">
                     </div>
                     <div class="row">
                         <label for="newDisc" class="form-label">Discount</label>
                         <input type="number" class="form-control" id="newDisc" placeholder="Enter Discount" name="discount">
                     </div>

                 </form>

             </div>

             <!-- Modal footer -->
             <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                 <button type="button" class="btn btn-primary modalButton" data-bs-dismiss="modal" id='btnAddNew'>Add</button>
             </div>

         </div>
     </div>
 </div>