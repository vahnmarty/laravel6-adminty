<!-- Modal -->
  <div class="modal fade" id="createModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Enroll Student</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body text-center m-t-20 m-b-20">
          <a href="{{ route('enrolments.create') }}" class="btn btn-success btn-lg b-radius-10 m-l-10">
              <i class="icofont icofont-plus"></i> Old Student
          </a>
          <a href="{{ route('enrolments.new-student') }}" class="btn btn-inverse btn-lg b-radius-10 m-l-10">
              <i class="icofont icofont-plus"></i> New Student
          </a>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
      </div>
      
    </div>
  </div>