<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <title>manage users</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' />
    <link rel='stylesheet' href='manage.css'>
    

</head>

<body>
    <?php
    require 'dbconfig.php';
    $query = "SELECT * FROM user";
    $result = mysqli_query($con,$query);
    ?>

    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class='card'>
                    <div class='card-body' id="searchbar">
                        <h5 class='card-title text-uppercase mb-0'>Manage Users</h5>
                        <input type="search" placeholder="Search..">
                    </div>
                    <div class='table-responsive'>
                        <table class='table no-wrap user-table mb-0'>
                            <thead>
                                <tr>
                                    <th scope='col' class='border-0 text-uppercase font-medium'>User Img</th>
                                    <th scope='col' class='border-0 text-uppercase font-medium'>User Name</th>
                                    <th scope='col' class='border-0 text-uppercase font-medium'>Full Name</th>
                                    <th scope='col' class='border-0 text-uppercase font-medium'>Email</th>
                                    <th scope='col' class='border-0 text-uppercase font-medium'>Address</th>
                                    <th scope='col' class='border-0 text-uppercase font-medium'>Action</th>
                                    <th scope='col' class='border-0 text-uppercase font-medium'>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                while ($raw = mysqli_fetch_assoc($result)) {
                                    echo "<tr>
                                    <td class='tc'><img src='".$raw['Profile_photo']."' alt='profile' class='dp'></td>
                                    <td>
                                        <h5 class='font-medium mb-0'>".$raw['user_name']."</h5>
                                        
                                    </td>
                                    <td>
                                        <span class='text-muted'>".$raw['fname']."</span><br>
                                        
                                    </td>
                                    <td>
                                        <span class='text-muted'>".$raw['email']."</span><br>
                                        
                                    </td>
                                    <td>
                                        <span class='text-muted'>".$raw['address']."</span><br>
                                        <span class='text-muted'>".$raw['pincode']."</span>
                                    </td>
                                    <td class='bd'>
                                        <button type='button'class='btn btn-outline-info btn-circle btn-lg btn-circle jnilrnd'><img src='warning.svg' class='ic'></button>
                                        <button type='button'class='btn btn-outline-info btn-circle btn-lg btn-circle jnilrnd'><img src='restrict.svg' class='ic'></button>
                                        <button type='button'class='btn btn-outline-info btn-circle btn-lg btn-circle jnilrnd'><img src='history.svg' class='ic'></button>

                                    </td>
                                    <td>
                                    <span class='text-muted'>".$raw['Status']."</span>
                                    </td>
                                </tr>";
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type='text/javascript'>
    </script>
</body>

</html>