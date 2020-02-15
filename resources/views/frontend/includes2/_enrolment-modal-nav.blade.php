<!-- Modal -->
<div class="modal fade" id="navEnrolment" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Enrolment</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-block text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('enrolments.index') }}">
                            <div class="card bg-aqua update-card">
                                <div class="card-block hover-btn">
                                    <i class="icofont icofont-address-book" style="font-size: 40px"></i> <br> <h6 class="mt-10">Manage Enrolment</h6>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('enrolments.create') }}">
                            <div class="card bg-orange update-card">
                                <div class="card-block hover-btn">
                                    <i class="icofont icofont-plus" style="font-size: 40px"></i> <br> <h6 class="mt-10">Old Student</h6>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('enrolments.new-student') }}">
                            <div class="card b-green update-card">
                                <div class="card-block hover-btn">
                                    <i class="icofont icofont-plus" style="font-size: 40px"></i> <br> <h6 class="mt-10">New Student</h6>
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div> -->
        </div>

    </div>
</div>