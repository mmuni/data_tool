<?php

$this->start('script');
$this->Js->buffer('Holder.add_theme("white", { background:"#fff", foreground:"#a7a7a7", size:10 });');
$this->end();

$this->start('css');
echo $this->Html->css('keen-dashboards');
$this->end();

$this->start('title');
echo 'Dashboard';
$this->end();

?>

<div class="row">
	<div class="col-sm-4">
		<div class="panel panel-info">
			<!-- Default panel contents -->
			<div class="panel-heading"><i class="glyphicon glyphicon-tower"></i> Entire University</div>
			<!-- Table -->
			<table class="table">
				<tr>
					<th>School</th>
					<th>Applications</th>
				</tr>
				<tr>
					<td>Business</td>
					<td class="text-right">12</td>
				</tr>
				<tr>
					<td>Informatics and Computing </td>
					<td class="text-right">7</td>
				</tr>
				<tr>
					<td>Education</td>
					<td class="text-right">15</td>
				</tr>
				<tr>
					<td>Health Sciences</td>
					<td class="text-right">0</td>
				</tr>
				<tr>
					<td>Agricultural &amp; Environmental Sciences</td>
					<td class="text-right">0</td>
				</tr>
				<tr>
					<td><b>Total</b></td>
					<td class="text-right"><b>34</b></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="col-sm-8 well" id="graph"></div>
</div>

<hr class="hr"/>

</div>
	<div class="col-sm-4">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><i class="glyphicon glyphicon-book"></i> School of Business</div>
			<!-- Table -->
			<table class="table">

				<tr>
					<td>Business Management</td>
					<td class="text-right">9</td>
				</tr>

				<tr>
					<td>Public Administration</td>
					<td class="text-right">1</td>
				</tr>

				<tr>
					<td>Banking and Microfinance</td>
					<td class="text-right">2</td>
				</tr>

				<tr>
					<td><b>Total of Applications</b></td>
					<td class="text-right"><b>10</b></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><i class="glyphicon glyphicon-book"></i> School of Informatics and Computing</div>

			<!-- Table -->
			<table class="table">
				<tr>
					<td>IT Academic Department</td>
					<td class="text-right">4</td>
				</tr>
				<tr>
					<td>IT Technical Department</td>
					<td class="text-right">3</td>
				</tr>
				<tr>
					<td><b>Total of Applications</b></td>
					<td class="text-right"><b>7</b></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><i class="glyphicon glyphicon-book"></i> School of Education </div>

			<!-- Table -->
			<table class="table">
				<tr>
					<td>Department of Education</td>
					<td class="text-right">15</td>
				</tr>
				<tr>
					<td><b>Total of Applications</b></td>
					<td class="text-right"><b>15</b></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div class="row">

	<div class="col-sm-4">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><i class="glyphicon glyphicon-book"></i> School of Health Sciences </div>

			<!-- Table -->
			<table class="table">
				<tr>
					<td>Department of Public Health</td>
					<td class="text-right">0</td>
				</tr>
				<tr>
					<td><b>Total of Applications</b></td>
					<td class="text-right"><b>0</b></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><i class="glyphicon glyphicon-book"></i> School of Education </div>

			<!-- Table -->
			<table class="table">
				<tr>
					<td>Department of Education</td>
					<td class="text-right">15</td>
				</tr>
				<tr>
					<td><b>Total of Applications</b></td>
					<td class="text-right"><b>15</b></td>
				</tr>
			</table>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading"><i class="glyphicon glyphicon-book"></i> School of Education </div>

			<!-- Table -->
			<table class="table">
				<tr>
					<td>Department of Education</td>
					<td class="text-right">15</td>
				</tr>
				<tr>
					<td><b>Total of Applications</b></td>
					<td class="text-right"><b>15</b></td>
				</tr>
			</table>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-3">
		<div class="chart-wrapper">
			<img data-src="/js/holder.js/100%x150/white">
		</div>
	</div>
	<div class="col-sm-3">
		<div class="chart-wrapper">
			<img data-src="/js/holder.js/100%x150/white">
		</div>
	</div>
	<div class="col-sm-3">
		<div class="chart-wrapper">
			<img data-src="/js/holder.js/100%x150/white">
		</div>
	</div>
	<div class="col-sm-3">
		<div class="chart-wrapper">
			<img data-src="/js/holder.js/100%x150/white">
		</div>
	</div>
</div>

<script>
$(function () {
    $('#graph').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Summary Chart'
        },
        xAxis: {
            categories: ['Business', 'Informatics & Computing', 'Education', 'Health Sciences', 'Agricultural & Environmental Sciences']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Applications'
            },
            stackLabels: {
                enabled: true,
                style: {
                    fontWeight: 'bold',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                }
            }
        },
        legend: {
            align: 'right',
            x: -30,
            verticalAlign: 'top',
            y: 25,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                    this.series.name + ': ' + this.y + '<br/>' +
                    'Total: ' + this.point.stackTotal;
            }
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                    style: {
                        textShadow: '0 0 3px black'
                    }
                }
            }
        },
        series: [{
            name: 'Unhandled',
            data: [8, 1, 5, 0, 0]
	},{
	    name: 'Handled',
            data:[4, 6, 10, 0, 0]
        }]
    });
});
</script>
