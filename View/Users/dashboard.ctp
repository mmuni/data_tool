<?php

$this->start('script');
$this->Js->buffer('Holder.add_theme("white", { background:"#fff", foreground:"#a7a7a7", size:10 });');
$this->end();

$this->start('css');
echo $this->Html->css('keen-dashboards');
$this->end();

?>

<div class="row">
	<div class="col-sm-8">
		<div class="chart-wrapper">
			<div class="chart-title">
				Pageviews by browser (past 24 hours)
			</div>
			<div class="chart-stage">
				<div id="chart-01"></div>
			</div>
			<div class="chart-notes">
				This is a sample text region to describe this chart.
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="chart-wrapper">
			<div class="chart-title">
				Pageviews by browser (past 5 days)
			</div>
			<div class="chart-stage">
				<div id="chart-02"></div>
			</div>
			<div class="chart-notes">
				Notes go down here
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="chart-wrapper">
			<div class="chart-title">
				Impressions by advertiser
			</div>
			<div class="chart-stage">
				<div id="chart-03"></div>
			</div>
			<div class="chart-notes">
				Notes go down here
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="chart-wrapper">
			<div class="chart-title">
				Impressions by device
			</div>
			<div class="chart-stage">
				<div id="chart-04"></div>
			</div>
			<div class="chart-notes">
				Notes go down here
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="chart-wrapper">
			<div class="chart-title">
				Impressions by country
			</div>
			<div class="chart-stage">
				<div id="chart-05"></div>
			</div>
			<div class="chart-notes">
				Notes go down here
			</div>
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
