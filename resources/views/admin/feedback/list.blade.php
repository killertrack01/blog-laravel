<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách Feedback')
@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách Feedback</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="listfeedback" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Email user</th>
                    <th>Nội dung</th>
                    <th>Trạng thái</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>nguyenvana@gmail.com</td>
                        <td>Trang web tốt đấy, cần cải thiện nhiều hơn</td>
                        <td class="text-center">
                            <div class="controls">
                                <select tabindex="1" name="feedback_status" data-placeholder="Chọn trạng thái.." class="span8">
                                    <option value="">Chọn ở đây..</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>nguyenvana@gmail.com</td>
                        <td>Trang web tốt đấy, cần cải thiện nhiều hơn</td>
                        <td class="text-center">
                            <div class="controls">
                                <select tabindex="1" name="feedback_status" data-placeholder="Chọn trạng thái.." class="span8">
                                    <option value="">Chọn ở đây..</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>nguyenvana@gmail.com</td>
                        <td>Trang web tốt đấy, cần cải thiện nhiều hơn</td>
                        <td class="text-center">
                            <div class="controls">
                                <select tabindex="1" name="feedback_status" data-placeholder="Chọn trạng thái.." class="span8">
                                    <option value="">Chọn ở đây..</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>nguyenvana@gmail.com</td>
                        <td>Trang web tốt đấy, cần cải thiện nhiều hơn</td>
                        <td class="text-center">
                            <div class="controls">
                                <select tabindex="1" name="feedback_status" data-placeholder="Chọn trạng thái.." class="span8">
                                    <option value="">Chọn ở đây..</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Email user</th>
                        <th>Nội dung</th>
                        <th>Trạng thái</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection
@section('script-section')
<script>
    $(function () {
      $('#listfeedback').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
@endsection
