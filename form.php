<!-- BS5 Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adding or Updating Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- 加入 form -->
            <form id="addform" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- user name -->
                    <div class="form-group">
                        <label>Name:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark">
                                <i class="fas fa-user-alt text-light"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Enter your username" autocomplete="off" id="username" name="name" required>
                        </div>
                    </div>
                    <!-- email -->
                    <div class="form-group">
                        <label>Email:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark">
                                <i class="fas fa-envelope-open text-light"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Enter your Email" autocomplete="off" id="email" name="email" required>
                        </div>
                    </div>
                    <!-- mobile -->
                    <div class="form-group">
                        <label>Mobile:</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark">
                                <i class="fas fa-phone text-light"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Enter your mobile" autocomplete="off" id="mobile" name="mobile" required maxLength="10" minLength="10">
                        </div>
                    </div>
                    <!-- photo -->
                    <div class="form-group">
                        <label>Photo:</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>