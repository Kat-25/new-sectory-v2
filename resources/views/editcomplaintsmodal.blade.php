<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Complaints</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">

        <form action="{{route('complaints.update')}}" method="POST">
            @csrf
        <div class="card-body">                   
            <div class="form-group">
                <div class="form-row">
                    {{-- <input type="hidden" name="_method" value="PUT"> --}}
                    <div class="form-group col col-sm-3 col-md-8 col-lg-12">
                        <label for="complainant">Complainant</label>
                        <input type="text" class="form-control" name="name" id="" value={{ $complaint->complainant ?? '' }}>
                    </div>
                    <div class="col col-sm-3 col-md-8 col-lg-12">
                        <label for="date">Date</label> 
                        <input type="date" class="form-control datetimepicker-input" name="date" data-target="#datetimepicker1" value={{ $complaint->dateOfIncident ?? '' }} />
                    </div>
                    <div class="col col-sm-3 col-md-8 col-lg-12">
                        <div class="form-group mt-2">
                        <strong>Time:</strong>
                        <input type="time" name="time" class="form-control" name="time" value={{ $complaint->timeOfIncident ?? '' }}>
                    </div>
                </div>
            
            </div>
                <div class="form-row">
                    <div class="form-group col col-sm-3 col-md-8 col-lg-12">
                    <label for="complaint-title">Title</label>
                    <input type="text" class="form-control" id="" name="title" value={{ $complaint->title ?? ''}}>
                    </div>
                                        
                    <div class="col col-sm-3 col-md-8 col-lg-12">
                    <label for="exampleFormControlTextarea1">Type your complain/s.</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col mt-4">
                            <h4>Uploaded Evidence</h4>
                            <div class="radio-group"></div>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="evidence"value={{ $complaint->evidence ?? '' }}>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Save changes</button>
   </div>
   </div>
</div>
</div>