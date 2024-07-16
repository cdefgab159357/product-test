<?php
require __DIR__ . '/parts/admin-required.php';

$title = "通訊錄列表";
$pageName = "ab_list";

$perPage = 20; # 表示一頁最多有 20 筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) {
  header('Location: ./'); # 跳轉頁面
  exit; # 結束程式, die()
}

require __DIR__ . '/camping-db-connect.php';
$t_sql = "SELECT COUNT(1) FROM orderlist
join orderlist_detail
ON orderlist.product_order_detail_id = orderlist_detail.product_order_detail_id
join product_name
ON orderlist_detail.product_id = product_name.product_id
";
# 取得總筆數
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = 0;
$rows = [];
if ($totalRows) {
  # 計算總頁數
  $totalPages = ceil($totalRows / $perPage);
  if ($page > $totalPages) {
    header('Location: ?page=' . $totalPages); # 跳轉頁面到最後一頁
    exit; # 結束程式
  }

  # 取得該頁的資料
  $sql = sprintf(
    "SELECT * FROM orderlist ORDER BY product_order_id DESC LIMIT %s, %s",
    ($page - 1) * $perPage,
    $perPage
  );

  $rows = $pdo->query($sql)->fetchAll();
}

?>
<?php include __DIR__ . "/parts/html-head.php"; ?>
<?php include __DIR__ . "/parts/order-navbar.php"; ?>
<div class="container">
  <div class="row">
    <div class="col">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <?php for ($i = $page - 5; $i <= $page + 5; $i++) :
            if ($i >= 1 && $i <= $totalPages) :
          ?>
              <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
              </li>
          <?php
            endif;
          endfor; ?>
        </ul>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table table-bordered table-striped">
        <thead>
          <tr>
            <th><i class="fa-solid fa-trash"></i></th>
            <th>訂單編號</th>
            <th>訂單詳情</th>
            <th>會員ID</th>
            <th>產品名稱</th>
            <th>訂單總價</th>
            <th>是否付款</th>
            <th>訂單日期</th>
            <th>付款方式</th>
            <th>配送狀態</th>
            <th>配送地址</th>
            <th><i class="fa-solid fa-pen-to-square"></i></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($rows as $r) : ?>
            <tr>
              <td>
                <!--
                <a href="del.php?ab_id=<?= $r['ab_id'] ?>" onclick="return confirm(`是否要刪除編號為 <?= $r['ab_id'] ?> 的資料?`)">
          -->
                <a href="javascript: deleteOne(<?= $r['product_order_id'] ?>)">
                  <i class="fa-solid fa-trash"></i>
                </a>
              </td>
              <td><?= $r['product_order_id'] ?></td>
              <td><?= $r['product_order_detail_id'] ?></td>
              <td><?= $r['user_id'] ?></td>
              <td><?= $r['product_id'] ?></td>
              <td><?= $r['product_total_price'] ?></td>
              <td><?= $r['product_name'] ?></td>
              <td><?= $r['order_date'] ?></td>
              <td><?= $r['product_payment'] ?></td>
              <td><?= $r['deliver_status'] ?></td>
              
              <!-- htmlentities 做 html 跳脫字元 -->
              <td><?= htmlentities($r['deliver_address']) ?></td>
              <td>
                <a href="edit.php?ab_id=<?= $r['product_order_id'] ?>">
                  <i class="fa-solid fa-pen-to-square"></i>
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include __DIR__ . "/parts/scripts.php"; ?>
<script>
  const data = <?= json_encode($rows)  ?>;
  const deleteOne = (ab_id) => {
    if (confirm(`是否要刪除編號為 ${ab_id} 的資料??`)) {
      location.href = `del.php?ab_id=${ab_id}`;
    }
  };
</script>

<?php include __DIR__ . "/parts/html-foot.php"; ?>