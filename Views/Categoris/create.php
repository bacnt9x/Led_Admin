<div class="card">
    <h5 class="card-header">Thêm Danh Mục</h5>
    <div class="card-body">
        <a href="/admin/categoris/cate/home" class="btn btn-info btn-sm" style="margin-bottom: 20px">Trở lại</a>

        <form method='post' action='#'>
            <div class="form-group">
                <label for="title">Tên danh mục</label>
                <input type="text" class="form-control" id="name" placeholder="VD: Đèn LED" name="name">
            </div>

            <div class="form-group">
                <label for="title">Thông tin danh mục</label>
                <input type="text" class="form-control" id="description" placeholder="VD: Đèn chiếu sáng" name="description">
            </div>

            <div class="form-group">
                <label for="title">Trạng thái </label>
                <input type="number" min="0" max="1" class="form-control" id="status" placeholder="VD: 0 or 1" name="status">
            </div>

            <button type="submit" class="btn btn-success">Thêm</button>
            <button type="reset" class="btn btn-warning">Nhập lại</button>
        </form>
    </div>
</div>