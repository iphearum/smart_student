<div class="container">
    <div class="card">
        <div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse Universities</strong> <a href="add-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add University</a></div>
        <div class="card-body">
            <div class="col-sm-12">
                <h5 class="card-title"><i class="fa fa-fw fa-search"></i> Find University</h5>
                <form method="get">
                    <div class="row">
                        <div class="row-sm-2">
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="username" id="username" class="form-control" value="" placeholder="Enter University name">
                            </div>
                        </div>
                        <div class="row-sm-2">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <div>
                                    <button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Search</button>
                                    <a href="" class="btn btn-danger"><i class="fa fa-fw fa-sync"></i> Clear</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <th>N</th>
                    <th>University Name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($university as $val)
                <tr>
                    <td>{{$val->id}}</td>
                    <td>{{$val->name_university}}</td>
                    <td align="center">
                        <form action="/university/{{$val->id}}" method="put">
                            <a href="#" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
                            <a href="#" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>