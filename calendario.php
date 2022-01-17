<?php require_once('bdd.php');?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Meal Planner - Calendario</title>
		<!-- MDB icon -->
		<link rel="icon" href="./assets/icons/logo-calendar.svg" type="image/x-icon" />
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
		<!-- MDB -->
		<link rel="stylesheet" href="css/mdb.min.css" />
		<link rel="stylesheet" href="css/styles.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="./assets/css/about-us.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Montserrat&family=Roboto+Slab&display=swap" rel="stylesheet">
		
		<!-- FullCalendar -->
		<link href='css/fullcalendar.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
	<header>
    <section class="header-container" style="background: transparent;">
      <div class="container-fluid p-0 box-1" style="background: transparent; height:100%; width:100%;">
        <div class="container-fluid text-left p-0 busqueda" style="background: transparent;">
          <div class="m-0 p-0">
            <?php include("layouts/header.php"); ?>
          </div>
        </div>
    </section>
  </header>
	<?php
		if(isset($_SESSION["sess_user"])){  
			$sql = "SELECT id, user, title, start, end, color FROM events WHERE user='$_SESSION[sess_user]'";
		}
		else {
			$message = "Tiene que iniciar sesión";
				echo "<script type='text/javascript'>alert('$message');</script>";
			echo '<script>window.location.href = "login.php";</script>'; 
			exit();
		}

		$req = $bdd->prepare($sql);
		$req->execute();

		$events = $req->fetchAll();

	?>
	<main>
		<div style="width: 100%; height: 300px; padding-top: 0px; position: absolute; z-index:-1;">
        <img src="./assets/img/calendar-background.png" alt="" style="width: 100%; height: 300px;">
    </div>
    <section class="title-container" style="width: 100%; height: 300px; padding-top: 100px; margin-bottom: 20px;">
      <div style="width: 1300px; height: 100%; margin: 0 auto;">
        <img src="./assets/icons/calendar-title.svg" alt="" style="width: 100%; height: 100%;">
      </div>
    </section>
		<section style="width: 75%; height: auto; margin:auto; margin-bottom: 25px">
			<div class="container">
				<div id="calendar" class="col-md-12" style="font-size: 20px; text-transform:capitalize;">
			</div>
		</section>
		<?php require('./layouts/footer-2.php')?>
	</main>
	<?php include('./calendar-modal.php')?>

	<!-- jQuery Version 1.11.1 -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	
	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar/fullcalendar.min.js'></script>
	<script src='js/fullcalendar/fullcalendar.js'></script>
	<script src='js/fullcalendar/locale/es.js'></script>
	
	
	<script>

	$(document).ready(function() {

		var date = new Date();
        var yyyy = date.getFullYear().toString();
        var mm = (date.getMonth()+1).toString().length == 1 ? "0"+(date.getMonth()+1).toString() : (date.getMonth()+1).toString();
    	var dd  = (date.getDate()).toString().length == 1 ? "0"+(date.getDate()).toString() : (date.getDate()).toString();
		
		$('#calendar').fullCalendar({
			header: {
				 language: 'es',
				left: 'prev,today,next ',
				center: 'title',
				right: 'month,basicWeek,basicDay',

			},
			defaultDate: yyyy+"-"+mm+"-"+dd,
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				
				$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				$('#ModalAdd').modal('show');
			},
			eventRender: function(event, element) {
				element.bind('dblclick', function() {
					$('#ModalEdit #id').val(event.id);
					$('#ModalEdit #title').val(event.title);
					$('#ModalEdit #color').val(event.color);
					$('#ModalEdit').modal('show');
				});
			},
			eventDrop: function(event, delta, revertFunc) {

				edit(event);

			},
			eventResize: function(event,dayDelta,minuteDelta,revertFunc) {

				edit(event);

			},
			events: [
			<?php foreach($events as $event): 
			
				$start = explode(" ", $event['start']);
				$end = explode(" ", $event['end']);
				if($start[1] == '00:00:00'){
					$start = $start[0];
				}else{
					$start = $event['start'];
				}
				if($end[1] == '00:00:00'){
					$end = $end[0];
				}else{
					$end = $event['end'];
				}
			?>

				{
					id: '<?php echo $event['id']; ?>',
					title: '<?php echo $event['title']; ?>',
					start: '<?php echo $start; ?>',
					end: '<?php echo $end; ?>',
					color: '<?php echo $event['color']; ?>',
				},
			<?php endforeach; ?>
			]
		});
		
		function edit(event){
			start = event.start.format('YYYY-MM-DD HH:mm:ss');
			if(event.end){
				end = event.end.format('YYYY-MM-DD HH:mm:ss');
			}else{
				end = start;
			}
			
			id =  event.id;
			
			Event = [];
			Event[0] = id;
			Event[1] = start;
			Event[2] = end;
			
			$.ajax({
			 url: 'editEventDate.php',
			 type: "POST",
			 data: {Event:Event},
			 success: function(rep) {
					if(rep == 'OK'){
						alert('Evento se ha guardado correctamente');
					}else{
						alert('No se pudo guardar. Inténtalo de nuevo.'); 
					}
				}
			});
		}
		
	});

</script>

</body>

</html>