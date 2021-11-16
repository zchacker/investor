			<!-- Footer -->
			<footer class="footer-main">
				&copy; 2021 <strong>Brown Diamond Tech ltd</strong>
			</footer>
			<!-- /footer -->
	</div>
		<!-- /main container -->
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="<?= base_url() ?>/dashboard/js/jquery.min.js"></script>
<script src="<?= base_url() ?>/dashboard/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>/dashboard/js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="<?= base_url() ?>/dashboard/js/plugins/blockui-master/jquery-ui.js"></script>
<script src="<?= base_url() ?>/dashboard/js/plugins/blockui-master/jquery.blockUI.js"></script>
<!--Float Charts-->
<script src="<?= base_url() ?>/dashboard/js/plugins/flot/jquery.flot.min.js"></script>
<script src="<?= base_url() ?>/dashboard/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?= base_url() ?>/dashboard/js/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="<?= base_url() ?>/dashboard/js/plugins/flot/jquery.flot.selection.min.js"></script>
<script src="<?= base_url() ?>/dashboard/js/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="<?= base_url() ?>/dashboard/js/plugins/flot/jquery.flot.time.min.js"></script>
<script src="<?= base_url() ?>/dashboard/js/functions.js"></script>

<!--ChartJs-->
<script src="<?= base_url() ?>/dashboard/js/plugins/chartjs/Chart.min.js"></script>

<!--Summernote Editor-->
<script src="<?= base_url() ?>/dashboard/js/plugins/summernote/summernote.min.js"></script>


<script>
	$(document).ready(function() {
		$('#summernote').summernote({
			height: 260, // set editor height
			minHeight: null, // set minimum height of editor
			maxHeight: null, // set maximum height of editor
			focus: true // set focus to editable area after initializing summernote
		});

		var $checkbox = $('.todo-list .checkbox input[type=checkbox]');

		$checkbox.change(function() {
			if ($(this).is(':checked')) {
				$(this).parent().addClass('checked');
			} else {
				$(this).parent().removeClass('checked');
			}
		});

		$checkbox.each(function(index) {
			if ($(this).is(':checked')) {
				$(this).parent().addClass('checked');
			} else {
				$(this).parent().removeClass('checked');
			}
		});

		// charts
		var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

		var previousPoint = null;
		// $('#graph-bars, #graph-lines').bind('plothover', function(event, pos, item) {
		// 	if (item) {
		// 		if (previousPoint != item.dataIndex) {
		// 			previousPoint = item.dataIndex;
		// 			$('#flotTip').remove();
		// 			var x = item.datapoint[0],
		// 				y = item.datapoint[1];

		// 			var color = item.series.color;
		// 			var day = new Date(x).getDate();
		// 			var month = monthNames[new Date(x).getMonth()];
		// 			var year = new Date(x).getFullYear();
		// 			showTooltip(item.pageX,
		// 				item.pageY,
		// 				day + ' ' + month + ',' + year +
		// 				" : <strong>" + y +
		// 				" visitors</strong>");

		// 			/*content = item.series.label + ' = ' + item.datapoint[1];
		// 			 showTooltip(item.pageX, item.pageY, content);
		// 			 showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');*/

		// 		}
		// 	} else {
		// 		$('#flotTip').remove();
		// 		previousPoint = null;
		// 	}
		// });

		var graphData = [{
			// Visits
			data: [
				[1196463600000, 45],
				[1196550000000, 30],
				[1196636400000, 98],
				[1196722800000, 37],
				[1196809200000, 95],
				[1196895600000, 45],
				[1196982000000, 65],
				[1197068400000, 120],
				[1197154800000, 90],
				[1197241200000, 65],
				[1197327600000, 50]
			],
			color: '#ff7575'
		}, {
			// Returning Visits
			data: [
				[1196463600000, 100],
				[1196550000000, 170],
				[1196636400000, 260],
				[1196722800000, 127],
				[1196809200000, 240],
				[1196895600000, 180],
				[1196982000000, 160],
				[1197068400000, 210],
				[1197154800000, 270],
				[1197241200000, 120],
				[1197327600000, 85]
			],
			color: '#77b7c5',
		}];


		// Lines
		// $.plot($('#graph-lines'), graphData, {
		// 	series: {
		// 		points: {
		// 			show: true,
		// 			radius: 3.5
		// 		},
		// 		lines: {
		// 			show: true,
		// 			fill: true
		// 		},
		// 		shadowSize: 0
		// 	},
		// 	grid: {
		// 		color: '#646464',
		// 		borderColor: 'transparent',
		// 		borderWidth: 20,
		// 		hoverable: true
		// 	},
		// 	xaxis: {
		// 		mode: "time",
		// 		tickColor: 'transparent',
		// 		tickDecimals: 2
		// 	},
		// 	yaxis: {
		// 		tickSize: 100
		// 	}
		// });

		// Bars
		// $.plot($('#graph-bars'), graphData, {
		// 	series: {
		// 		points: {
		// 			show: true,
		// 			radius: 3.5,
		// 		},
		// 		lines: {
		// 			show: true,
		// 			fill: false
		// 		},
		// 		bars: {
		// 			show: false,
		// 			lineWidth: 5,
		// 			align: 'center'
		// 		},
		// 		shadowSize: 0,
		// 		hoverable: true
		// 	},
		// 	grid: {
		// 		color: '#646464',
		// 		borderColor: 'transparent',
		// 		borderWidth: 20,
		// 		hoverable: true
		// 	},
		// 	xaxis: {
		// 		mode: "time",
		// 		tickColor: 'transparent',
		// 		tickDecimals: 2
		// 	},
		// 	yaxis: {
		// 		tickSize: 100
		// 	}
		// });

		var $graphBar = $('#graph-bars'),
			$graphLine = $('#graph-lines'),
			$linkLine = $('#lines'),
			$linkBar = $('#bars');
		$graphBar.hide();
		$linkLine.on('click', function(e) {
			e.preventDefault();

			$linkBar.removeClass('active');
			$graphBar.fadeOut(function() {
				$(this).addClass('active');
				$graphLine.fadeIn();
			});
		});
		$linkBar.on('click', function(e) {
			e.preventDefault();

			$linkLine.removeClass('active');
			$graphLine.fadeOut(function() {
				$(this).addClass('active');
				$graphBar.fadeIn();
			});
		});

		var revenueData = [{
			// Visits
			data: [
				[1475280000000, 400.05],
				[1475366400000, 1600.32],
				[1475452800000, 900.35],
				[1475539200000, 2100.31],
				[1475625600000, 1800.55],
				[1475712000000, 900.42],
				[1475798400000, 2885.01],
				[1475884800000, 1870.97],
				[1475971200000, 2145.14],
				[1476057600000, 1130.14],
				[1476144000000, 1490.02],
				[1476230400000, 740.74],
				[1476316800000, 1280.88],
				[1476403200000, 1157.71],
				[1476489600000, 599.71],
				[1476576000000, 2159.89],
				[1476662400000, 1557.81],
				[1476748800000, 959.06],
				[1476835200000, 158.00],
				[1476921600000, 757.99],
				[1477008000000, 800],
				[1477094400000, 950.25],
				[1477180800000, 1289.22],
				[1477267200000, 400.52],
				[1477353600000, 2425],
				[1477440000000, 1300.35],
				[1477526400000, 1600.20],
				[1477612800000, 890.65],
				[1477699200000, 2165.29],
				[1477785600000, 1566.22],
				[1477872000000, 2064.33]
			],
			//data: [[6, 400], [7, 1600], [8, 900], [9, 2100], [10, 1200], [12, 1800]],
			//data: [[1167692400000, 1600.05], [1167778800000, 5800.32], [1167865200000, 570.35], [1167951600000, 5600.31], [1168210800000, 1155.55], [1168297200000, 2255.64], [1168383600000, 5334.02], [1168470000000, 1151.88], [1168556400000, 3352.99], [1168815600000, 2652.99], [1168902000000, 3251.21], [1168988400000, 4152.24], [1169074800000, 4450.48], [1169161200000, 7751.99], [1169420400000, 5851.13], [1169506800000, 1555.04], [1169593200000, 55.37], [1169679600000, 54.23], [1169766000000, 55.42], [1170025200000, 54.01], [1170111600000, 56.97], [1170198000000, 58.14], [1170284400000, 58.14], [1170370800000, 59.02], [1170630000000, 58.74], [1170716400000, 58.88], [1170802800000, 57.71], [1170889200000, 59.71], [1170975600000, 59.89], [1171234800000, 57.81], [1171321200000, 59.06], [1171407600000, 58.00], [1171494000000, 57.99], [1171580400000, 59.39], [1171839600000, 59.39], [1171926000000, 58.07], [1172012400000, 60.07], [1172098800000, 61.14], [1172444400000, 61.39], [1172530800000, 61.46], [1172617200000, 61.79], [1172703600000, 62.00], [1172790000000, 60.07], [1173135600000, 60.69], [1173222000000, 61.82], [1173308400000, 60.05], [1173654000000, 58.91], [1173740400000, 57.93], [1173826800000, 58.16], [1173913200000, 57.55], [1173999600000, 57.11], [1174258800000, 56.59], [1174345200000, 59.61], [1174518000000, 61.69], [1174604400000, 62.28], [1174860000000, 62.91], [1174946400000, 62.93], [1175032800000, 64.03], [1175119200000, 66.03], [1175205600000, 65.87], [1175464800000, 64.64], [1175637600000, 64.38], [1175724000000, 64.28], [1175810400000, 64.28], [1176069600000, 61.51], [1176156000000, 61.89], [1176242400000, 62.01], [1176328800000, 63.85], [1176415200000, 63.63], [1176674400000, 63.61], [1176760800000, 63.10], [1176847200000, 63.13], [1176933600000, 61.83], [1177020000000, 63.38], [1177279200000, 64.58], [1177452000000, 65.84], [1177538400000, 65.06], [1177624800000, 66.46], [1177884000000, 64.40], [1178056800000, 63.68], [1178143200000, 63.19], [1178229600000, 61.93], [1178488800000, 61.47], [1178575200000, 61.55], [1178748000000, 61.81], [1178834400000, 62.37], [1179093600000, 62.46], [1179180000000, 63.17], [1179266400000, 62.55], [1179352800000, 64.94], [1179698400000, 66.27], [1179784800000, 65.50], [1179871200000, 65.77], [1179957600000, 64.18], [1180044000000, 65.20], [1180389600000, 63.15], [1180476000000, 63.49], [1180562400000, 65.08], [1180908000000, 66.30], [1180994400000, 65.96], [1181167200000, 66.93], [1181253600000, 65.98], [1181599200000, 65.35], [1181685600000, 66.26], [1181858400000, 68.00], [1182117600000, 69.09], [1182204000000, 69.10]],
			color: '#fff',
			label: 'Revenue($)',
			dashes: {
				show: true
			}
		}];

		// $('#placeholder_overview, #Revenue-lines').bind('plothover', function(event, pos, item) {
		// 	if (item) {
		// 		if (previousPoint != item.dataIndex) {
		// 			previousPoint = item.dataIndex;
		// 			$('#flotTip').remove();
		// 			var x = item.datapoint[0],
		// 				y = item.datapoint[1];
		// 			//showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');

		// 			var color = item.series.color;
		// 			var day = new Date(x).getDate();
		// 			var month = monthNames[new Date(x).getMonth()];
		// 			var year = new Date(x).getFullYear();
		// 			showTooltip(item.pageX,
		// 				item.pageY,
		// 				day + ' ' + month + ',' + year +
		// 				" : <strong>" + y +
		// 				"($)</strong>");
		// 		}
		// 	} else {
		// 		$('#flotTip').remove();
		// 		previousPoint = null;
		// 	}
		// });

		var options = {
			series: {
				points: {
					show: true,
					radius: 3.5,
					fillColor: "rgba(0,0,0,0.35)",
				},
				lines: {
					show: true,
					lineWidth: 2,
					fill: true
				},
				bars: {
					show: false,
					lineWidth: 2
				},
				shadowSize: 10,
				//highlightColor: '#fff',
				hoverable: true,
				clickable: true,
			},
			grid: {
				color: '#646464',
				borderColor: 'transparent',
				borderWidth: 20,
				hoverable: true,
				tickColor: "rgba(255,255,255,0.05)",
				markingsColor: "rgba(255,255,255,0.05)",
				markingsLineWidth: 5,
				/*backgroundColor: {
					colors: ["rgba(54,58,60,0.05)", "rgba(0,0,0,0.2)"]
				}*/
			},
			legend: {
				show: true
			},
			xaxis: {
				mode: 'time',
				font: {
					weight: "bold"
				},
				color: "#D6D8DB",
				tickColor: 'transparent',
				tickDecimals: 2
			},
			selection: {
				mode: "x"
			},
			yaxis: {
				font: {
					weight: "bold"
				},
				color: "#D6D8DB",
				tickSize: 500
			}
		};

		// Lines
		//var plot = $.plot($('#Revenue-lines'), revenueData, options);

		// Bars
		// var overview = $.plot($("#placeholder_overview"), revenueData, {
		// 	colors: ["#edc240", "#5eb95e"],
		// 	series: {
		// 		bars: {
		// 			show: true,
		// 			lineWidth: 5,
		// 			fillColor: "#5eb95e"
		// 		},
		// 		shadowSize: 2,
		// 		grow: {
		// 			active: false
		// 		}
		// 	},
		// 	legend: {
		// 		show: false
		// 	},
		// 	xaxis: {
		// 		ticks: [],
		// 		mode: "time"
		// 	},
		// 	yaxis: {
		// 		ticks: [],
		// 		min: 0,
		// 		autoscaleMargin: 0.1
		// 	},
		// 	selection: {
		// 		mode: "x"
		// 	},
		// 	grid: {
		// 		color: "#D6D8DB",
		// 		borderColor: 'transparent',
		// 		markingsColor: "rgba(255,255,255,0.05)",
		// 		/*backgroundColor: {
		// 			colors: ["rgba(54,58,60,0.05)", "rgba(0,0,0,0.2)"]
		// 		}*/
		// 	}
		// });

		// $("#Revenue-lines").bind("plotselected", function(event, ranges) {
		// 	// do the zooming
		// 	plot = $.plot($("#Revenue-lines"), revenueData,
		// 		$.extend(true, {}, options, {
		// 			xaxis: {
		// 				min: ranges.xaxis.from,
		// 				max: ranges.xaxis.to
		// 			}
		// 		}));

		// 	// don't fire event on the overview to prevent eternal loop
		// 	overview.setSelection(ranges, true);
		// });

		// $("#placeholder_overview").bind("plotselected", function(event, ranges) {
		// 	plot.setSelection(ranges);
		// });

		// $("#Revenuelines").click(function(event) {
		// 	event.preventDefault();
		// 	overview.clearSelection();
		// 	$.plot($("#Revenue-lines"), revenueData, options);
		// });

		// pie graph
		var doughnutData = [{
				value: 5742,
				color: "#2bbfba",
				highlight: "#1fb3ae",
				label: "Only Visited"
			},
			{
				value: 2496,
				color: "#00b8ce",
				highlight: "#00acc2",
				label: "Purchased"
			},
			{
				value: 1762,
				color: "#e5e8eb",
				highlight: "#d9dcdf",
				label: "Bounced"
			}
		];

		var doughnutOptions = {
			segmentShowStroke: true,
			segmentStrokeColor: "#fff",
			segmentStrokeWidth: 4,
			percentageInnerCutout: 60, // This is 0 for Pie charts
			animationSteps: 100,
			animationEasing: "easeOutBounce",
			animateRotate: true,
			animateScale: false,
			responsive: true,
			//String - A legend template
			legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
		};

		var canvas = document.getElementById("doughnutChart");
		var helpers = Chart.helpers;
		//var ctx = document.getElementById("doughnutChart").getContext("2d");
		//var moduleDoughnut = new Chart(canvas.getContext("2d")).Doughnut(doughnutData, doughnutOptions);
		// var legendHolder = document.createElement('div');
		// legendHolder.innerHTML = moduleDoughnut.generateLegend();
		// helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index) {
		// 	helpers.addEvent(legendNode, 'mouseover', function() {
		// 		var activeSegment = moduleDoughnut.segments[index];
		// 		activeSegment.save();
		// 		activeSegment.fillColor = activeSegment.highlightColor;
		// 		moduleDoughnut.showTooltip([activeSegment]);
		// 		activeSegment.restore();
		// 	});
		// });
		// helpers.addEvent(legendHolder.firstChild, 'mouseout', function() {
		// 	moduleDoughnut.draw();
		// });
		// canvas.parentNode.parentNode.appendChild(legendHolder.firstChild);
	});
</script>
</body>

</html>