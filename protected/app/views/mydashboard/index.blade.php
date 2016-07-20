{{ HTML::script('sximo/js/plugins/chartjs/Chart.min.js') }}
{{HTML::script('sximo/js/plugins/chartjs/echarts.js')}}
<div class="page-content row">

	<div class="page-content-wrapper">

	<p id="a">here will be changed</p>
	@if(Session::get('gid') ==1)




	<div class="row m-t">
		<div class="col-md-12">
			<div class="sbox">
				<div class="sbox-title"> <h3> Sample Chart <small> ( Plugins js using Chart Js ) </small> </h3> </div>
				<div class="sbox-content">
					<div class="row">
						<div class="col-md-11">
							<canvas id="canvas" width="350" height="200" ></canvas>
						</div>
						
					</div>
				
						
				</div>
			</div>
		</div>
		
		
	
	</div>
	@endif
</div>	
	
</div>

<script>

		var temp;
		$.get("/source/mydashboard/testdata",{},function(mydata){
			temp=mydata;
		});
		$(document).ajaxStop(function() {

			$("#a").html(temp[2]);
			var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
			var lineChartData = {
				labels : ["January","February","March","April","May","June","July"],
				datasets : [
					{
						label: "My First dataset",
						fillColor : "rgba(220,220,220,0.2)",
						strokeColor : "rgba(220,220,220,1)",
						pointColor : "rgba(220,220,220,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(220,220,220,1)",
						data : [temp[0],temp[1],temp[2],temp[3],temp[4],temp[5],temp[6]]
					},
					{
						label: "My Second dataset",
						fillColor : "rgba(151,187,205,0.2)",
						strokeColor : "rgba(151,187,205,1)",
						pointColor : "rgba(151,187,205,1)",
						pointStrokeColor : "#fff",
						pointHighlightFill : "#fff",
						pointHighlightStroke : "rgba(151,187,205,1)",
						data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
					}
				]

			}

				var ctx = document.getElementById("canvas").getContext("2d");
				window.myLine = new Chart(ctx).Line(lineChartData, {
					responsive: true
				});

		});


			//$.get("/source/mydashboard/testdata",{},function(mydata){
			//	$("#a").html(mydata);
			//})


	
</script>	

