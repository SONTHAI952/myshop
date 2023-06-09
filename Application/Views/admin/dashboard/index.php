<?php view('shared.admin.header', ['title' => 'Bảng điều khiển']);
?>

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $total_orders ?></h3>

                <p>Tổng đơn</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="./?module=admin&controller=order" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3><?= $total_products ?></h3>

                <p>Tổng sản phẩm</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="./?module=admin&controller=product" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= $total_customers ?></h3>

                <p>Tổng số khách hàng</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="./?module=admin&controller=account" class="small-box-footer">Chi tiết <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <!-- <div class="col-lg-3 col-6"> -->
        <!-- small box -->
        <!-- <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= $avg_rating ?><sup style="font-size: 20px">/5</sup></h3>

                <p>Điểm đánh giá/p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="./?module=admin&controller=review" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div> -->
    <!-- ./col -->
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <h2>
            Sản phẩm bán chạy
        </h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tên</th>
                    <th>Danh mục</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                    <th>Số lượng bán ra</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($top_products as $model) : ?>
                    <tr>
                        <td><?= $model['rank'] ?></td>
                        <td><?= $model['name'] ?></td>
                        <td><?= $model['category_name'] ?></td>
                        <td><span class="badge badge-warning"><?= number_format($model['price']) ?></span>
                        </td>


                        <td>
                            <img src="./public/uploads/<?= $model['image'] ?>" width="60">
                        </td>
                        <td>
                            <?= $model['purchased'] ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>


    <!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
        <h2>
            Top Customers
        </h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Province</th>
                    <th>Orders</th>
                    <th>Spendings</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($top_customers as $customer) : ?>
                    <tr>
                        <td><?= $customer['rank'] ?></td>
                        <td><?= $customer['fname'] . ' ' . $customer['lname'] ?></td>
                        <td><?= $customer['phone'] ?></td>
                        <td><?= $customer['province'] ?></td>
                        <td><?= $customer['orders'] ?></td>
                        <td><span class="badge badge-warning">$<?= number_format($customer['spendings']) ?></span></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div> -->

</div>

<!-- /.row -->



<?php view('shared.admin.footer');
?>