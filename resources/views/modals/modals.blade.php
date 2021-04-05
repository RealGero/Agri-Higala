<div class="container">
    <div class="modal-cancel">
        <div class="row">
            <div class="col-12">
                <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Cancel Order</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to cancel this order?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                          <button type="button" class="btn btn-primary">Yes</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="modal-order-received">
        <div class="row">
            <div class="col-12">
                <div class="modal fade" id="order-receivedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Order received</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to receive this order?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                          <button type="button" class="btn btn-primary">Yes</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <div class="modal-add-profile">
      <div class="row">
          <div class="col-12">
              <div class="modal fade" id="add-profile-pic" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Profile Photo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{action ('UsersController@updateUserImage')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="modal-body">
                          <div class="card col-11 mx-auto">
                          <div class="card-body">
                            <input type="file" name="user_image">
                          </div>
                        </div>
                        
                      </div>
                      <div class="modal-footer">
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
          </div>
      </div>
  </div>
</div>

{{-- modal for valid ID --}}

<div class="container">
  <div class="modal-add-id">
      <div class="row">
          <div class="col-12">
              <div class="modal fade" id="add-id-front" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Valid ID front page</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="{{action ('UsersController@updateUserImage')}}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <div class="modal-body">
                          <div class="card col-11 mx-auto">
                          <div class="card-body">
                            <input type="file" name="user_image">
                          </div>
                        </div>
                        
                      </div>
                      <div class="modal-footer">
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                        
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
          </div>
      </div>
  </div>
</div>
