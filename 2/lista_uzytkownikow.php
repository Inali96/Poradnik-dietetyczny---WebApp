<?php

include('db.php');

if(!isset($_SESSION["rola"]))
{
	header('location:logowanie.html');
}



include('header.php');
include('menu.php');

?>

<section id="home" class="shop-area hero-equal-height section-padding overflow-hidden d-flex align-items-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12">
				<div class="text-center home-content z-index position-relative">
					<div class="login-container">
						<div class="container">
							<span id="alert_action"></span>
							<div class="row">
								<div class="col-lg-12">
									<div class="panel panel-default">
										<div class="panel-heading">
											<div class="row">
												<div class="col-lg-12 col-md-10 col-sm-8 col-xs-6">
													<h1 class="panel-title" style="font-size: 40px!important;"> Lista użytkowników</h1>
												</div>
												<div class="col-lg-12" align="right">
													<button type="button" name="add" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success btn-xs">Utwórz użytkownika</button>
												</div>
											</div>
											<div class="clear:both"></div>
										</div>
										<div class="panel-body">
											<div class="row">
												<div class="col-lg-12 table-responsive">
												<table id="user_data" class="table table-bordered table-striped" style="color: white;">
													<thead>
														<tr>
															<th>ID</th>
															<th>Imie</th>
															<th>Email</th>
															<th>Login</th>
															<th>Rola</th>
															<th>Status</th>
															<th></th>
															<th></th>
															<th></th>
															<th></th>
														</tr>
													</thead>
												</table><br>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div></div></div></div></div></div></section>
					<section>
						<div id="userModal" class="modal fade">
							<div class="modal-dialog">
								<form method="post" id="user_form">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title"></i></h4>
										</div>
										<div class="modal-body">
											<div class="form-group">
												<h4>Imie:</h4>
												<input type="text" class="form-control" placeholder="Imie" name="imie" id="imie" />
											</div>
											<div class="form-group">
												<h4>Email:</h4>
												<input type="email" class="form-control" placeholder="Email" name="email" id="email" />
												<span id="check-e"></span>
											</div>
											<div class="form-group">
												<h4>Login:</h4>
												<input type="login" class="form-control" placeholder="Login" name="login" id="login" />
											</div>
											<div class="form-group">
												<h4>Hasło:</h4>
												<input type="password" class="form-control" placeholder="Haslo" name="haslo" id="haslo" />
											</div>
										</div>
										<div class="modal-footer">
											<input type="hidden" name="id" id="id" />
											<input type="hidden" name="btn_action" id="btn_action" />
											<input type="submit" name="action" id="action" class="button" value="Utwórz" />
												<button type="button" class="button" data-dismiss="modal">Zamknij</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<script>

	$(document).ready(function(){

	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').html("<i class='fa fa-plus'></i> Utwórz użytkownika");
		$('#action').val("Utwórz");
		$('#btn_action').val("Add");
	});

	var userdataTable = $('#user_data').DataTable({
		"processing": true,
		"serverSide": true,
		"bInfo":false,
		"order": [],
		"ajax":{
			url:"user_fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"target":[4,5],
				"orderable":false
			}
		],
		"pageLength": 10,
		  "bFilter": true,
		    "bLengthChange": false,
		    "bPaginate": false
	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		$('#action').attr('disabled','disabled');
		var form_data = $(this).serialize();
		$.ajax({
			url:"user_action.php",
			method:"POST",
			data:form_data,
			success:function(data)
			{
				$('#user_form')[0].reset();
				$('#userModal').modal('hide');
				$('#alert_action').fadeIn().html('<div class="alert alert-success">'+data+'</div>');
				$('#action').attr('disabled', false);
				userdataTable.ajax.reload();
			}
		})
	});
	
		

$(document).on('click', '.update', function(){
		var id = $(this).attr("id");
		var btn_action = 'fetch_single';
		$.ajax({
			url:"user_action.php",
			method:"POST",
			data:{id:id, btn_action:btn_action},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#user_form')[0].reset();
				$('#imie').val(data.imie);
				$('#login').val(data.login);
				$('#email').val(data.email);
				$('#haslo').val(data.haslo);
				$('#id').val(id);
				$('.modal-title').html("<i class='fa fa-pencil-square-o'></i> Edycja danych");
				$('#action').val('Edytuj');
				$('#btn_action').val('Edit');
				$('#haslo').attr('required', false);
			}
		})
	});


		$(document).on('click', '.delete', function(){
			var id = $(this).attr("id");
			var status = $(this).data('status');
			var btn_action = "delete";
			if(confirm("Czy na pewno chcesz zmienić status konta?"))
			{
				$.ajax({
					url:"user_action.php",
					method:"POST",
					data:{id:id, status:status, btn_action:btn_action},
					success:function(data)
					{
						$('#alert_action').fadeIn().html('<div class="alert alert-info">'+data+'</div>');
						userdataTable.ajax.reload();
					}
				})
			}
			else
			{
				return false;
			}
		});

$(document).on('click', '.rola', function(){
			var id = $(this).attr("id");
			var rola = $(this).data('rola');
			var btn_action = "rola";
			if(confirm("Czy na pewno chcesz zmienić rolę konta?"))
			{
				$.ajax({
					url:"user_action.php",
					method:"POST",
					data:{id:id, rola:rola, btn_action:btn_action},
					success:function(data)
					{
						$('#alert_action').fadeIn().html('<div class="alert alert-info">'+data+'</div>');
						userdataTable.ajax.reload();
					}
				})
			}
			else
			{
				return false;
			}
		});



$(document).on('click', '.delete2', function(){
			var id = $(this).attr("id");
			var btn_action = "delete2";
			if(confirm("Czy na pewno chcesz usunąć konto?"))
			{
				$.ajax({
					url:"user_action.php",
					method:"POST",
					data:{id:id, btn_action:btn_action},
					success:function(data)
					{
						$('#alert_action').fadeIn().html('<div class="alert alert-info">'+data+'</div>');
						userdataTable.ajax.reload();
					}
				})
			}
			else
			{
				return false;
			}
		});
	});



</script>
<?php include('footer.php'); ?>

