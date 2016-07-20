{{ HTML::script('sximo/js/plugins/chartjs/Chart.min.js') }}
{{HTML::script('sximo/js/plugins/chartjs/echarts.js')}}
<div class="page-content row">
	<div class="page-header">
	  <div class="page-title">
		<h3><i class="fa fa-desktop"></i> Dashboard <small> Summary info site </small></h3>
	  </div>

		  <ul class="breadcrumb">
			<li><a href="{{ URL::to('dashboard') }}">{{ Lang::get('core.home') }}</a></li>
			<li class="active">Dashboard</li>
		  </ul>
		  
	</div>
	<div class="page-content-wrapper">  
	


<section style="display:none">

		<div class="row m-l-none m-r-none m-t  white-bg shortcut " >
			<div class="col-sm-6 col-md-3 b-r  p-sm ">
				<span class="pull-left m-r-sm text-navy"><i class="fa fa-plus-circle"></i></span>
				<a href="{{ URL::to('module') }}" class="clear">
					<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.dash_i_module') }}  </strong>
					</span> <small class="text-muted text-uc">  {{ Lang::get('core.dash_module') }}</small>
				</a>
			</div>
			<div class="col-sm-6 col-md-3 b-r  p-sm">
				<span class="pull-left m-r-sm text-info">	<i class="fa fa-cogs"></i></span>
				<a href="{{ URL::to('config') }}" class="clear">
					<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.dash_i_setting') }}</strong>
					</span> <small class="text-muted text-uc">   {{ Lang::get('core.dash_setting') }} </small>
				</a>
			</div>
			<div class="col-sm-6 col-md-3 b-r  p-sm">
				<span class="pull-left m-r-sm text-warning">	<i class="fa fa-sitemap"></i></span>
				<a href="{{ URL::to('menu') }}" class="clear">
				<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.dash_i_sitemenu') }} </strong></span>
				<small class="text-muted text-uc">  {{ Lang::get('core.dash_sitemenu') }}  </small> </a>
			</div>
			<div class="col-sm-6 col-md-3 b-r  p-sm">
				<span class="pull-left m-r-sm ">	<i class="fa fa-users"></i></span>
				<a href="{{ URL::to('users') }}" class="clear">
				<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.dash_i_usergroup') }}</strong>
				</span> <small class="text-muted text-uc">  {{ Lang::get('core.dash_usergroup') }} </small> </a>
			</div>
		</div> </section>

			<div id="main" style="width: 1000px;height:700px;"></div>
			<script type="text/javascript">
				// 基于准备好的dom，初始化echarts实例
				var myChart = echarts.init(document.getElementById('main'));

				// 指定图表的配置项和数据
				var option = {
					title: {
						text: 'ECharts 入门示例'
					},
					tooltip: {},
					legend: {
						data:['销量']
					},
					xAxis: {
						data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
					},
					yAxis: {},
					series: [{
						name: '销量',
						type: 'bar',
						data: [5, 20, 36, 10, 10, 20]
					}]
				};

				// 使用刚指定的配置项和数据显示图表。
				myChart.setOption(option);
			</script>
</div>



