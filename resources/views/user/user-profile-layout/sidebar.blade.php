<div class="col-lg-3">
    <div class="card border-0 shadow mb-4 p-3">
        <div class="s-body text-center mt-3">
            <img src="user/images/avatar7.png" alt="ad"  class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="mt-3 pb-0">Darshan Bhandary</h5>
            <p class="text-muted mb-1 fs-6">Full Stack Developer</p>
            <div class="d-flex justify-content-center mb-2">
                <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-primary">Change Profile Picture</button>
            </div>
        </div>
    </div>
    <div class="card account-nav border-0 shadow mb-4 mb-lg-0">
        <div class="card-body p-0">
            <ul class="list-group list-group-flush ">
                <li class="list-group-item d-flex justify-content-between p-3">
                    <a href="{{ route('profile') }}">Profile Settings</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <a href="post-job.html">Post a Job</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <a href="my-jobs.html">My Jobs</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <a href="job-applied.html">Jobs Applied</a>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                    <a href="saved-jobs.html">Saved Jobs</a>
                </li>                                                        
            </ul>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title pb-0" id="exampleModalLabel">Change Profile Picture</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Profile Image</label>
                  <input type="file" class="form-control" id="image"  name="image">
              </div>
              <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary mx-3">Update</button>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
              
          </form>
        </div>
      </div>
    </div>
  </div>