<!-- Button trigger modal -->
<!-- Modal for Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex flex-column align-items-center">
                <button type="button" class="btn btn-primary mb-2 col-12" onclick="login()">Login</button>
                <p class="m-auto text-center p-2" style="font-size:15px">Register jika anda belum mempunyai akun</p>
                <button type="button" class="btn btn-danger col-12" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
            </div>
        </div>
    </div>
</div>


