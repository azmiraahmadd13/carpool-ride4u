
$.getJSON('homeAdmin.php', function(data) 
    {
		var date = data;
		function custom_sort(a, b) {
		return new Date(a.period).getTime() - new Date(b.period).getTime();
		}	
		date.sort(custom_sort); // sort month in ascending order
        Morris.Bar({
            element: 'graph_bar_group',
            data: data,
            xkey: ['Month'],
            ykeys: ['Number of user registered'],
            labels: ['Number of user registered'],
            hideHover: 'auto',
            resize: true,
			parseTime: false,
			xLabelAngle: 60
        });
    });