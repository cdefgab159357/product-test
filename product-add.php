<?php
require __DIR__ . '/parts/admin-required.php';

$title = "新增通訊錄";
$pageName = "ab_add";

require __DIR__ . '/camping-db-connect.php';

?>
<?php include __DIR__ . "/parts/html-head.php"; ?>
<style>
  form .mb-3 .form-text {
    color: red;
  }
</style>
<?php include __DIR__ . "/parts/product-navbar.php"; ?>
<div class="container">
  <div class="row">
    <div class="col-6">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title">新增商品</h5>

          <form name="form1" onsubmit="sendData(event)" novalidate>
            <div class="mb-3">
              <label for="birthday" class="form-label">上架日期</label>
              <input type="date" class="form-control" name="birthday" id="birthday">
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">商品名稱</label>
              <input type="text" class="form-control" name="name" id="name" required>
              <div class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">商品分類</label>
              <div class="dropdown">
                <button class="btn btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  ---請選擇---
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">1</a></li>
                  <li><a class="dropdown-item" href="#">2</a></li>
                  <li><a class="dropdown-item" href="#">3</a></li>
                  <li><a class="dropdown-item" href="#">4</a></li>
                  <li><a class="dropdown-item" href="#">5</a></li>
                </ul>
              </div>
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">價格(元)</label>
              <input type="text" class="form-control" name="mobile" id="mobile">
              <div class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">數量</label>
              <input type="email" class="form-control" name="email" id="email">
              <div class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">上傳圖片</label>
              <form action="./camping-upload-avatar.php" method="post" enctype="multipart/form-data">

                <input type="file" name="avatar" accept="image/*"><br> <img src="" alt="" id="myImg" width="300px">

      </form>
              </div>
              


            <div class="mb-3">
              <label for="address" class="form-label">商品描述</label>
              <textarea class="form-control" name="address" id="address" rows="3"></textarea>
            </div>

            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

            <br>

            <button type="submit" class="btn btn-primary">送出</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">新增結果</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-success" role="alert">
          新增成功
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
        <a href="index_.php" class="btn btn-primary">到列表頁</a>
      </div>
    </div>
  </div>
</div>

<?php include __DIR__ . "/parts/scripts.php"; ?>
<script>
  const nameField = document.form1.name;
  const emailField = document.form1.email;
  const modal = new bootstrap.Modal('#exampleModal');
  const modalBody = document.querySelector('#exampleModal .modal-body');

  function validateEmail(email) {
    const re =
      /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }

  const sendData = e => {
    e.preventDefault(); // 不要使用傳統的表單送出, 使用 AJAX
    // 重置錯誤訊息
    nameField.nextElementSibling.innerHTML = '';
    nameField.style.border = '1px solid #CCC';
    emailField.nextElementSibling.innerHTML = '';
    emailField.style.border = '1px solid #CCC';

    let isPass = true; // 表單有沒有通過檢查

    // TODO: 表單欄位的資料檢查
    if (nameField.value.length < 2) {
      isPass = false;
      nameField.nextElementSibling.innerHTML = '請填寫正確的姓名';
      nameField.style.border = '1px solid red';
    }
    if (!validateEmail(emailField.value)) {
      isPass = false;
      emailField.nextElementSibling.innerHTML = '請填寫正確的 Email';
      emailField.style.border = '1px solid red';
    }

    if (isPass) {
      // FormData 的個體看成沒有外觀的表單
      const fd = new FormData(document.form1);

      fetch('product-add-api.php', {
          method: 'POST',
          body: fd, // enctype: multipart/form-data
        }).then(r => r.json())
        .then(result => {
          console.log(result);
          if (result.success) {
            modalBody.innerHTML = `
            <div class="alert alert-success" role="alert">
              新增成功
            </div>`;
            // alert('新增成功')
          } else {
            modalBody.innerHTML = `
            <div class="alert alert-danger" role="alert">
              沒有新增
            </div>`;
            // alert('沒有新增')
          }
          modal.show();
        })
        .catch(ex => console.log(ex))
    }
  };

  const field = document.forms[0].avatar;

  field.addEventListener("change", (e) => {
    console.log(field.files[0]);
    const url = URL.createObjectURL(field.files[0]);
    myImg.src = url;
  });
</script>
<?php include __DIR__ . "/parts/html-foot.php"; ?>