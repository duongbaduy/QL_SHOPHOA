<div id="layoutSidenav_content">
<main>
    <form action="index.php?act=edit_admin" method="post" enctype="multipart/form-data">
    <div class="container">
        <h2>Admin Login</h2>
        <div class="mb-3">
            <label for="MaLoai" class="form-label">ID</label>
            <input type="text" class="form-control" name="id" placeholder="" value="<?=$admin1[0]['id']?>" readonly>
        </div>
        <div class="mb-3">
            <label for="UserName" class="form-label">UserName</label>
            <input type="text" class="form-control" name="UserName" placeholder="" value="<?=$admin1[0]['username']?>">
        </div>
        <div class="mb-3">
            <label for="PassWord" class="form-label">Password</label>
            <input type="text" class="form-control" name="Password" placeholder="" value="<?=$admin1[0]['password']?>">
        </div>
        <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
            <input type="submit" value="Save" class="btn btn-secondary" name="edit_admin"/>
        </div>
    </div>
    </div>

    </form>
    
    
</main>
</div>
