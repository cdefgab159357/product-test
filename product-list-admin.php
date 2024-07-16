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
$t_sql = "SELECT COUNT(1) FROM product_name ";
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
    "SELECT * FROM product_name ORDER BY product_id DESC LIMIT %s, %s",
    ($page - 1) * $perPage,
    $perPage
  );

  $rows = $pdo->query($sql)->fetchAll();
}

?>
<?php include __DIR__ . "/parts/html-head.php"; ?>
<?php include __DIR__ . "/parts/product-navbar.php"; ?>
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
            <th>商品編號</th>
            <th>商品名稱</th>
            <th>商品類型</th>
            <th>商品價格</th>
            <th>庫存數量</th>
            <th>商品圖片</th>
            <th>商品描述</th>
            <th>建立時間</th>
            <th>修改時間</th>
            <th>商品備註</th>
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
                <a href="javascript: deleteOne(<?= $r['product_id'] ?>)">
                  <i class="fa-solid fa-trash"></i>
                </a>
              </td>
              <td><?= $r['product_id'] ?></td>
              <td><?= $r['product_name'] ?></td>
              <td><?= $r['product_type'] ?></td>
              <td><?= $r['product_price'] ?></td>
              <td><?= $r['product_num'] ?></td>
              <td><?= $r['product_pic'] ?></td>
              <td><?= $r['product_desc'] ?></td>
              <td><?= $r[''] ?></td>
              <td><?= $r[''] ?></td>
              <td><?= $r[''] ?></td>
              <td><img src="./camping imgs/bed1.jpg" alt="" width="150px"></td>
              
              <!-- htmlentities 做 html 跳脫字元 -->
              <td><?= htmlentities($r['address']) ?></td>
              <td>
                <a href="edit.php?ab_id=<?= $r['product_id'] ?>">
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