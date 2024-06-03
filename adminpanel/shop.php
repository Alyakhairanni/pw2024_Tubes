<div class="container add-perf mb-3 p-2">
    <h1 class="text-center fonts">ADD NEW PRODUCT</h1>
    <form class="mt-5" action="" method="post">
        <div class="mb-3">
            <label class="form-label">Name Product</label>
            <input type="text" class="form-control" placeholder="Input Product Name Here">
        </div>
        <div class="mb-3">
            <label class="form-label">Product Price</label>
            <input type="text" class="form-control" placeholder="Input Price Name Here">
        </div>
        <div class="mb-3">
            <label class="form-label">Product Pict</label>
            <input type="file" class="form-control">
        </div>
        <button class="btn btn-danger">Add New Product</button>
    </form>
</div>

<!-- Table Shop -->

<div class="container mt-4 border border-1 p-2 mb-3">
    <table class="w-100" cellpadding="11" cellspacing="0">

        <tr class="text-center">
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Action</th>
        </tr>

        <tr class="text-center">
            <td><img src="../assets/img/Fabioasher.jpg" alt="" width="80px" height="80px"></td>
            <td>Fabio Asher</td>
            <td>Rp.250.000</td>
            <td>
                <a class="btn btn-success" href="#">Update</a>
                <a class="btn btn-danger" href="#">Delete</a>
            </td>
        </tr>

    </table>

</div>