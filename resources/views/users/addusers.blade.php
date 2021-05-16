
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 


<h1 class="text-center mt-5">Add user</h1>
<div class="container">
    <div class="row">
        <div class = "col-md-4"></div>
        <div class="col-md-5 ">
            <div class="card-body">

                <form method="POST" action="{{route('users.store')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="Name" class="form-label"> Name</label>
                        <input type="text" name="name" class="form-control form-control-sm" id="name">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="email">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" name="phone" class="form-control form-control-sm" id="phone">
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="password">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Active">Active</label>
                        <input type="checkbox" name="status" value="1">
                    </div>

                    <div class="mb-3">
                    <label for="role">Role</label><br>
                    <select for="role" name="role">
                        <option value = "admin">Admin</option>
                        <option value = "staff">Staff</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Add user</button>

            </div>
        </div>
    </div>

</div>