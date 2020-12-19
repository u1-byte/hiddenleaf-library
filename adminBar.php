<div class="col-2">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Users
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="list-group">
                        <a href="userActive.php" class="list-group-item list-group-item-action">Verified Users</a>
                        <a href="userPending.php" class="list-group-item list-group-item-action">Pending Users</a>
                        <a href="userInactive.php" class="list-group-item list-group-item-action">Inactive Users</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Books
                    </button>
                </h2>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="list-group">
                        <a href="addBook.php" class="list-group-item list-group-item-action">Add Book</a>
                        <a href="collection.php" class="list-group-item list-group-item-action">Displayed Books</a>
                        <a href="collection.php?condition=2" class="list-group-item list-group-item-action">Inactive Books</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Requests
                    </button>
                </h2>
            </div>

            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="list-group">
                        <a href="requestAccept.php" class="list-group-item list-group-item-action">Requested Books</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Borrows
                    </button>
                </h2>
            </div>

            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">Scheduled</a>
                        <a href="#" class="list-group-item list-group-item-action">Picked</a>
                        <a href="#" class="list-group-item list-group-item-action">Canceled</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>