<?php 

    $pageTitle = "Kategoriyalar";

    $action = $_GET['action'];
    $filename = __DIR__ ."/$action.php";
?>

<?php if ( file_exists($filename) ) { 
        include_once __DIR__ ."/$action.php"; 
    } else {
?>

<section class="w-100 bg-white text-center py-4 shadow rounded">
       <div class="d-flex justify-content-between align-items-center my-3 px-5">
           <h4>Barcha kategoriyalar</h2>
           <a href="?page=categories&action=create" class="btn btn-success">Yangi kiritish</a>
       </div> 
       <div class="px-5">
       <table class="table table-stripped border">
            <thead>
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Nomi</th>
                <th scope="col">Description</th>
                <th scope="col">Tahrirlash</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>O'zbekiston</td>
                    <td>Yurtimiz yangiliklari</td>
                    <td>
                        <a href="?page=categories&action=edit&category_id=">
                            <i class="fa fa-edit text-success"></i>
                            tahrirlash
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>O'zbekiston</td>
                    <td>Yurtimiz yangiliklari</td>
                    <td>
                        <a href="?page=categories&action=edit&category_id=">
                            <i class="fa fa-edit text-success"></i>
                            tahrirlash
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>O'zbekiston</td>
                    <td>Yurtimiz yangiliklari</td>
                    <td>
                        <a href="?page=categories&action=edit&category_id=">
                            <i class="fa fa-edit text-success"></i>
                            tahrirlash
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>O'zbekiston</td>
                    <td>Yurtimiz yangiliklari</td>
                    <td>
                        <a href="?page=categories&action=edit&category_id=">
                            <i class="fa fa-edit text-success"></i>
                            tahrirlash
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>O'zbekiston</td>
                    <td>Yurtimiz yangiliklari</td>
                    <td>
                        <a href="?page=categories&action=edit&category_id=">
                            <i class="fa fa-edit text-success"></i>
                            tahrirlash
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
       </div>
</section>
    
<?php } ?>