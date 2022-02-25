<?php

require_once 'partials/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP advance CRUD</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <h1 class="bg-dark text-light text-center py-2">PHP advance CRUD</h1>
    <div class="container">
        <!-- input search and button section-->
        <div class="row mb-3">
            <div class="col-10">
                <div class="input-group">
                    <span class="input-group-text bg-dark">
                        <i class="fas fa-search text-light"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search user...">
                </div>
            </div>
            <div class="col-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#userModal">
                    Launch demo modal
                </button>
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
            </div>
        </div>

        <!-- show table -->
        <table class="table" id="usertable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Picture1</th>
                    <td>Khanam</td>
                    <td>khanam@demo.com</td>
                    <td>0987678</td>
                    <td>
                        <span>Edit</span>
                        <span>Profile</span>
                        <span>Delete</span>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- pagination -->
        <nav aria-label="Page navigation example">
            <ul class="pagination d-flex justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>


    <script scr="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</body>


</html>