<?php
$sql_all = "select * from Sach";
$query_all = mysqli_query($conn, $sql_all);
?>
<p style="text-align:center;color:#000;background:#999;padding:10px;"><strong>Tất Cả Sách</strong></p>
<div class="tacphamall">

    <ul>
        <?php
        while ($dong_all = mysqli_fetch_array($query_all)) {
        ?>
            <li><a href="index.php?xem=sach&id=<?php echo $dong_all['MaSach'] ?>">
                    <img src="admincp/modules/quanlychitietsach/uploads/<?php echo $dong_all['HinhAnh'] ?>" width="550" height="220" />
                    <p><?php echo $dong_all['TenSach'] ?></p>
                    <p style="color:#666"><?php echo $dong_all['SoTrang'] ?></p>
                    <p style="color:#090;">Giá :<?php echo $dong_all['DonGia'] ?>.000 VNĐ </p>

                </a> </li>
        <?php
        }
        ?>
    </ul>
</div>