<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Users</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1 id="users-header" class="mb-4">Users</h1>
        <div class="row">
            <div class="col-md-12">
                <table id="users-table" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($userdata as $usrdt): ?>
                        <tr>
                            <td><?=$usrdt['id'];?></td>
                            <td><?=$usrdt['kmy_last_name'];?></td>
                            <td><?=$usrdt['kmy_first_name'];?></td>
                            <td><?=$usrdt['kmy_email'];?></td>
                            <td><?=$usrdt['kmy_gender'];?></td>
                            <td><?=$usrdt['kmy_address'];?></td>
                            <td>
                                <a href="<?=site_url('users/update/' .$usrdt['id']);?>">Update</a> |
                                <a href="<?=site_url('users/delete/' .$usrdt['id']);?>" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>


                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?=site_url('users/add-user');?>" class="btn btn-primary">Add User</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#users-table').DataTable();
    });
    </script>
</body>
</html>
