<div>

   <div class="page-wrapper">
      <div class="content">
         <div class="page-header">
            <div class="row align-items-center w-100">
               <div class="col-lg-10 col-sm-12">
                  <h3 class="page-title">Calendar</h3>
               </div>
               <div class="col-lg-2 col-sm-12">
                  <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_event">Create Event</a>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-3 col-md-4">
               <h4 class="card-title">Drag & Drop Event</h4>
               <div id="calendar-events" class="mb-3">
                  <div class="calendar-events" data-class="bg-info"><i class="fas fa-circle text-info"></i> My Event One</div>
                  <div class="calendar-events" data-class="bg-success"><i class="fas fa-circle text-success"></i> My Event Two</div>
                  <div class="calendar-events" data-class="bg-danger"><i class="fas fa-circle text-danger"></i> My Event Three</div>
                  <div class="calendar-events" data-class="bg-warning"><i class="fas fa-circle text-warning"></i> My Event Four</div>
               </div>
               <div class="checkbox  mb-3">
                  <input id="drop-remove" type="checkbox">
                  <label for="drop-remove">
                     Remove after drop
                  </label>
               </div>
               <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add_new_event" class="btn mb-3 btn-primary btn-block w-100">
                  <i class="fas fa-plus"></i> Add Category
               </a>
            </div>
            <div class="col-lg-9 col-md-8">
               <div class="card bg-white">
                  <div class="card-body">
                     <div id="calendar"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div id="add_event" class="modal custom-modal fade" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Add Event</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
               <form>
                  <div class="form-group">
                     <label>Event Name <span class="text-danger">*</span></label>
                     <input class="form-control" type="text">
                  </div>
                  <div class="form-group">
                     <label>Event Date <span class="text-danger">*</span></label>
                     <div class="cal-icon">
                        <input class="form-control " type="text">
                     </div>
                  </div>
                  <div class="submit-section">
                     <button class="btn btn-primary submit-btn">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>


   <div class="modal custom-modal fade none-border" id="my_event">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Add Event</h4>
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer justify-content-center">
               <button type="button" class="btn btn-success save-event submit-btn">Create event</button>
               <button type="button" class="btn btn-danger delete-event submit-btn" data-dismiss="modal">Delete</button>
            </div>
         </div>
      </div>
   </div>


   <div class="modal custom-modal fade" id="add_new_event">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title">Add Category</h4>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
               <form>
                  <div class="form-group">
                     <label>Category Name</label>
                     <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
                  </div>
                  <div class="form-group mb-0">
                     <label>Choose Category Color</label>
                     <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                        <option value="success">Success</option>
                        <option value="danger">Danger</option>
                        <option value="info">Info</option>
                        <option value="primary">Primary</option>
                        <option value="warning">Warning</option>
                        <option value="inverse">Inverse</option>
                     </select>
                  </div>
                  <div class="submit-section">
                     <button type="button" class="btn btn-primary save-category submit-btn" data-dismiss="modal">Save</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>