<?php
include("conn.php");
?>
<!--begin::Card-->
<div class="card card-custom">
	<div class="card-header flex-wrap border-0 pt-6 pb-0">
		<div class="card-title">
			<h3 class="card-label">
				HTML Table
				<span class="d-block text-muted pt-2 font-size-sm">Datatable initialized from HTML table</span>
			</h3>
		</div>
		<div class="card-toolbar">
			<!--begin::Dropdown-->
<div class="dropdown dropdown-inline mr-2">
	<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"/>
        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>		Export
	</button>

	<!--begin::Dropdown Menu-->
	<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
		<!--begin::Navigation-->
		<ul class="navi flex-column navi-hover py-2">
			<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
		        Choose an option:
		    </li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-print"></i></span>
					<span class="navi-text">Print</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-copy"></i></span>
					<span class="navi-text">Copy</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-file-excel-o"></i></span>
					<span class="navi-text">Excel</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-file-text-o"></i></span>
					<span class="navi-text">CSV</span>
				</a>
			</li>
			<li class="navi-item">
				<a href="#" class="navi-link">
					<span class="navi-icon"><i class="la la-file-pdf-o"></i></span>
					<span class="navi-text">PDF</span>
				</a>
			</li>
		</ul>
		<!--end::Navigation-->
	</div>
	<!--end::Dropdown Menu-->
</div>
<!--end::Dropdown-->

<!--begin::Button-->
<a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#myModal">
	<span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" cx="9" cy="15" r="6"/>
        <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>	New Record
</a>
<!--end::Button-->
		</div>
	</div>
	<div class="card-body">
		<!--begin: Search Form-->
		<!--begin::Search Form-->
<div class="mb-7">
	<div class="row align-items-center">
		<div class="col-lg-9 col-xl-8">
			<div class="row align-items-center">
				<div class="col-md-4 my-2 my-md-0">
					<div class="input-icon">
						<input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
						<span><i class="flaticon2-search-1 text-muted"></i></span>
					</div>
				</div>

                				<div class="col-md-4 my-2 my-md-0">
					<div class="d-flex align-items-center">
						<label class="mr-3 mb-0 d-none d-md-block">Status:</label>
						<select class="form-control" id="kt_datatable_search_status">
							<option value="">All</option>
							<option value="1">Pending</option>
							<option value="2">Delivered</option>
							<option value="3">Canceled</option>
							<option value="4">Success</option>
							<option value="5">Info</option>
							<option value="6">Danger</option>
						</select>
					</div>
				</div>
				<div class="col-md-4 my-2 my-md-0">
					<div class="d-flex align-items-center">
						<label class="mr-3 mb-0 d-none d-md-block">Type:</label>
						<select class="form-control" id="kt_datatable_search_type">
							<option value="">All</option>
							<option value="1">Online</option>
							<option value="2">Retail</option>
							<option value="3">Direct</option>
						</select>
					</div>
				</div>
                			</div>
		</div>
		<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
			<a href="#" class="btn btn-light-primary px-6 font-weight-bold">
				Search
			</a>
		</div>
	</div>
</div>
<!--end::Search Form-->
<table class="table">
<thead>
	<tr>
		<th>ที่</th>
		<th>ชื่อ-นามสกุล</th>
		<th>เบอร์โทรศัพท์</th>
		<th>Email</th>
		<th>จัดการ</th>
	</tr>
</thead>
<tbody>
	<?php 
	$sql="SELECT * FROM tb_user";
	$query=$conn->query($sql);
	$i=1;
  while($result=$query->fetch_object()){
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $result->name; ?></td>
		<td><?php echo $result->tel; ?></td>
		<td><?php echo $result->email; ?></td>
		<td><a href="#" id="edit_user" data-toggle="modal" data-target="#myModal" data-user_id="<?php echo $result->user_id; ?>" data-username="<?php echo $result->username; ?>" data-password="<?php echo $result->password; ?>" data-name="<?php echo $result->name; ?>" data-tel="<?php echo $result->tel; ?>" data-email="<?php echo $result->email; ?>" data-linetoken="<?php echo $result->linetoken; ?>"><i class="far fa-edit"></i></a><a href="#" onclick="del(<?php echo $result->user_id; ?>)"><i class="far fa-trash-alt"></i></a></td>
	</tr>
	<?php $i++; } ?>
</tbody>
</table>

	</div>
</div>
<!--end::Card-->
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">เพิ่มผู้ใช้งานระบบใหม่</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        			<!--begin::Form-->
			<form class="form" action="api/ac_user.php?ac=addnew" method="POST" id="frm_user" ENCTYPE="multipart/form-data">
				<div class="card-body">	
					<input type="hidden" name="user_id" id="user_id">
				<div class="form-group">
						<label>ชื่อผู้ใช้</label>
						<input type="text" name="username" id="username" class="form-control form-control-solid" placeholder=""/>
					</div>
					<div class="form-group">
						<label>รหัสผ่าน</label>
						<input type="password" name="password" id="password" class="form-control form-control-solid" placeholder=""/>
					</div>				
					<div class="form-group">
						<label>ชื่อ-นามสกุล</label>
						<input type="text" name="name" id="name" class="form-control form-control-solid" placeholder="เช่น นายวิโรจน์  แก้วเรือง"/>
					</div>
					<div class="form-group">
						<label>เบอร์โทรศัพท์</label>
						<input type="text" name="tel" id="tel" class="form-control form-control-solid" placeholder="เช่น 0877669973"/>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" id="email" class="form-control form-control-solid" placeholder="เช่น shellclub@gmail.com"/>
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Line Token</label>
						<textarea class="form-control form-control-solid" rows="3" name="linetoken" id="linetoken"></textarea>
					</div>
					

					<!--begin: Code-->
				
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary mr-2">Submit</button>
					<button type="reset" class="btn btn-secondary">Cancel</button>
				</div>
			</form>
			<!--end::Form-->
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

	    <!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
<script>
	$(document).on("click","#edit_user",function(){
		var user_id = $(this).data("user_id");
		var username = $(this).data("username");
		var password = $(this).data("password");
		var name = $(this).data("name");
		var tel = $(this).data("tel");
		var email = $(this).data("email");
		var linetoken = $(this).data("linetoken");

		$("#user_id").val(user_id);
		$("#username").val(username);
		$("#password").val(password);
		$("#name").val(name);
		$("#tel").val(tel);
		$("#email").val(email);
		$("#linetoken").val(linetoken);
	});
</script>




			<script>
				function del(user_id){
						$.ajax({
            url: "api/ac_user.php?ac=delete&user_id=" + user_id,
            type: "POST",
            dataType: "html",
            data: "",
            processData: false,
            contentType: false,
            success: function(data, status) {
                if(data == "OK"){
										window.location.reload();
								}

            }
        });
							 }
						 </script>
<script>
	$(document).on("submit","#frm_user",function(e){
			if($("#name").val() == ""){
				alert("คุณยังไม่ได้กรอกชื่อ-นามสกุล กรุณาตรวจสอบใหม่อีกครั้ง");
				$("#name").focus();
			}else if($("#tel").val() == ""){
				alert("คุณยังไม่ได้กรอกเบอร์โทรศัพท์ กรุณาตรวจสอบใหม่อีกครั้ง");
				$("#tel").focus();
			}else if($("#email").val() == ""){
				alert("คุณยังไม่ได้กรอกอีเมล์ กรุณาตรวจสอบใหม่อีกครั้ง");
				$("#email").focus();
			}else{

				var url = $(this).attr("action");
        var data = new FormData(this);
				$.ajax({

            url: url,
            type: $(this).attr("method"),
            dataType: "html",
            data: data,
            processData: false,
            contentType: false,
            success: function(data, status) {
							
                if(data == "OK"){
										window.location.reload();
									}else{}
								}

            }
        });
			}	
			return false;	
	});
</script>


