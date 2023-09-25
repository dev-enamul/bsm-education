<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
         <a href="javascriptp:void(0)" class="text-danger" onclick="closeModal()">X</a>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('update.website.data')}}" id="edit_form" enctype="multipart/form-data">
            
          </form>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
    </div>
  </div>