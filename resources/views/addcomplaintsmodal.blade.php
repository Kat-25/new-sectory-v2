<!-- Modal -->
<div class="modal" id="exampleModaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
             <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Complaints</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action={{ route('complaints.store') }} name="complaintForm">
                            @csrf  
                            <div class="card-body">             
                                <div class="form-group">
                                    <div class="form-row">
                                    <div class="form-group col col-sm-3 col-md-8 col-lg-12">
                                        <label for="complainant">Complainant</label>
                                        <input type="text" class="form-control" id="" name="name">
                                    </div>
                                    <div class="col col-sm-3 col-md-8 col-lg-12">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control datetimepicker-input" data-target="#datetimepicker1" name="date" />
                                    </div>
                                    <div class="col col-sm-3 col-md-8 col-lg-12">
                                        <div class="form-group mt-2">
                                            <strong>Time:</strong>
                                            <input type="time" name="time" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col col-sm-3 col-md-8 col-lg-12 mx-auto">
                                        <label for="text">Type:</label>
                                        <select id="type" class="form-control" name="type">
                                            <option selected>Choose...</option>
                                            <option>high</option>
                                            <option>mid</option>
                                            <option>low</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col col-sm-3 col-md-8 col-lg-12">
                                        <label for="complaint-title">Title</label>
                                        <input type="text" class="form-control" id="" name="title">
                                        </div>
                                                            
                                        <div class="col col-sm-3 col-md-8 col-lg-12">
                                        <label for="exampleFormControlTextarea1">Type your complain/s.</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details"></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col mt-4">
                                            <h4>Uploaded Evidence</h4>
                                                <div class="radio-group"></div>
                                                <div class="form-group">
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="evidence">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add Complaint</button>
                    </div>
            </div>
        </div>
</div>