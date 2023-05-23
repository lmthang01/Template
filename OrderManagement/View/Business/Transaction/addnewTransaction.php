<!-- Modal Title -->
<div class="modal-title">Thêm mới Giao dịch</div>
<!-- Exit Button -->
<a href="">
    <i class="fa-solid fa-xmark"></i>
</a>

<!-- Form Add New Transaction -->
<form action="">
  <label for="trans-name">Tên giao dịch:</label required>
  <textarea id="trans-name" name="trans-name" rows="4" cols="50"></textarea><br>
  <label for="trans-des">Mô tả:</label>
  <textarea id="trans-des" name="trans-des" rows="4" cols="50"></textarea><br>
  <label for="trans-rate">Đánh giá:</label>
  <textarea id="trans-rate" name="trans-rate" rows="4" cols="50"></textarea><br>
  <label>Giao việc:</label><br>

  <label>Chia sẻ:</label><br>

  <label>Cơ hội:</label><br>

  <label>Khách hàng:</label><br>

  <label>Ngày bắt đầu:</label>
  <input type="datetime-local" name="datetime"><br>
  <label>Hạn hoàn thành:</label>
  <input type="datetime-local" name="datetime"><br>
  <label>Ngày hoàn thành:</label>
  <input type="datetime-local" name="datetime"><br>

  <label>Loại giao dịch:</label>
  <select name="" id="">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select><br>
  <label>Trạng thái:</label>
  <select name="" id="">
    <option value="">Chưa thực hiện</option>
    <option value="">Đang thực hiện</option>
    <option value="">Đã giải quyết </option>
    <option value="">Đã hoàn thành</option>
  </select><br>
  <label>Mức ưu tiên:</label>
  <select name="" id="">
    <option value="">1</option>
    <option value="">2</option>
    <option value="">3</option>
    <option value="">4</option>
  </select><br>
  <label>Kết quả:</label>
  <select name="" id="" disabled>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
    <option value=""></option>
  </select><br>

  <label for="snnv">Số ngày nhắc việc:</label>
  <input type="text" id="snnv" name="snnv"><br>
  <label for="address">Địa chỉ giao dịch:</label>
  <input type="text" id="address" name="address"><br>
  <label for="filegd">Tài liệu giao dịch:</label>
  <input type="file" id="filegd" name="filegd"><br>

  <input type="button" value="Lưu"><br>
  <input type="button" value="Lưu và thêm mới"><br>
  <input type="button" value="Hủy">
</form>
