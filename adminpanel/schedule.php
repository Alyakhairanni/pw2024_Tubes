<div class="container add-perf mb-3 p-2">
    <h1 class="text-center fonts">ADD NEW SCHEDULE</h1>
    <form class="mt-5" action="" method="post">
        <div class="mb-3">
            <label class="form-label">Name Performers</label>
            <input type="text" name="nama_jadwal" class="form-control" placeholder="Input Name Performers Here">
        </div>
        <div class="mb-3">
            <label class="form-label">Pict Performers</label>
            <input type="file" name="gambar_jadwal"  class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Schedule Performers</label>
            <input type="text" name="jam_jadwal" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Career</label>
            <input type="text" name="karir" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Music Type</label>
            <input type="text" name="tipe_musik" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-danger">Add New Schedule</button>
    </form>
</div>

<!-- Table Schedule -->

<div class="container mt-4 border border-1 p-2 mb-3">
    <table class="w-100" cellpadding="11" cellspacing="0">

        <tr class="text-center">
            <th>Performers Image</th>
            <th>Performers Name</th>
            <th>Performers Schedule</th>
            <th>Performers Career</th>
            <th>Performers Music Type</th>
            <th>Action</th>
        </tr>

        <tr class="text-center">
            <td><img src="../assets/img/Fabioasher.jpg" alt="" width="80px" height="80px"></td>
            <td>Fabio Asher</td>
            <td>9.00 PM</td>
            <td>Solo</td>
            <td>Mellow</td>
            <td>
                <a class="btn btn-success" href="#">Update</a>
                <a class="btn btn-danger" href="#">Delete</a>
            </td>
        </tr>

    </table>

</div>