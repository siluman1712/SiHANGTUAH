<script>
        "use strict";
        donutchart();
        function donutchart(){
             var ctx3 = document.getElementById("donutchart-area").getContext("2d");
                    window.myDoughnut = new Chart(ctx3, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                        ],
                        backgroundColor: [
                            
                            '#673ab7',
                            '#ec4061',
                            '#ffb803',
                            '#66cd2e',
                            '#11a0f8',
                        ],
                        label: 'Dataset 1'
                    }],
                    labels: [
                        "Eagle Ltd",
                        "Foogle Ltd",
                        "Chinmayaar",
                        "OpenField",
                        "MarsXspace"
                    ]
                },
                options: {
                    responsive: true,
                    legend: {
                        display: false,
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: 'Chart.js Doughnut Chart'
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
                }
            });

            setInterval(function(){
                myDoughnut.data.datasets.forEach(function(dataset) {
                    dataset.data = dataset.data.map(function() {
                        return randomScalingFactor();
                    });
                });
                window.myDoughnut.update();      
            }, 2000);
            
            
            /* Footable */
            $('.footable').footable();


            
        }
        
        var gdpData = {
			"AF": 16.63,
			"AL": 11.58,
			"AU": 158.97,
			"IN": 100.97,
		};
		$('#mapwrap2').vectorMap({
			map: 'world_mill',
			regionStyle: {
				initial: { fill: '#b7c8ff' }
			},
			series: {
				regions: [{
					values: gdpData,
					scale: ['#b7c8ff', '#3158d8'],
					normalizeFunction: 'polynomial'
				}]
			},
			onRegionTipShow: function (e, el, code) {
				el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
			}
		});
        $('#mapasiawrap').vectorMap({
			map: 'asia_mill', regionStyle: {
				initial: { fill: '#7a99ff' }
			}
		});


    </script>