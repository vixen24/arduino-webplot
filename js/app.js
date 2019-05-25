/*
   Author: William Idakwo
     Date: 12-11-2018
    Brief: read 10, 20, 30 or 40 from MySql database, plots data accordingly.
Important: data is in JSON format


*/
setInterval( function(){
$(document).ready(function(){
	$.ajax({
		//url: "http://192.168.0.10/AP/chartjs/read_1_data.php",  
		url: "http://localhost/AP/temp&pump/src/read_db_app.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			//initialize var to hold chart data 
			var bin   =  [0];
			var dust  =  [0];
			var sun   =  [0];
			var light =  [0];
			var Time  =  [];
			//if 10, 20, 30 or 40 is recieved re-initialize var
			if(data[0].Value == 10){				
				bin = [1];										
			}else if (data[0].Value == 20){								
				dust =[1];
			}else if (data[0].Value == 30){
				sun = [1];
			}else {
				light = [1];
			}
			Time.push(data[0].Time); //push data recieved into the Time variable				
			
			//using chartjs library to plot Graph
			var chartdata = {
				labels: Time,
				datasets : [
					{
						label: 'Commercial(C) ',
						backgroundColor: 'rgba(255, 0, 100, 0.9)',
						borderColor: 'rgba(255, 0, 100, 0.9)',
						/*hoverBackgroundColor: 'rgba(255, 0, 0, 0.1)',*/
						/*hoverBorderColor: 'rgba(255, 0, 0, 0.1)',*/
						data: bin,
					},{
						label: 'Resedential(R) ',
						backgroundColor: 'rgba(100, 0, 255, 0.9)',
						borderColor: 'rgba(100, 0, 255, 0.9)',
						/*hoverBackgroundColor: 'rgba(255, 0, 0, 0.1)',*/
						/*hoverBorderColor: 'rgba(255, 0, 0, 0.1)',*/
						data: dust,
					},{
						label: 'Hospital(H) ',
						backgroundColor: 'rgba(255, 100, 0, 0.9)',
						borderColor: 'rgba(255, 100, 0, 0.9)',
						/*hoverBackgroundColor: 'rgba(255, 0, 0, 0.1)',*/
						/*hoverBorderColor: 'rgba(255, 0, 0, 0.1)',*/
						data: sun,
					},{
						label: 'Industrial(I) ',
						backgroundColor: 'rgba(25, 100, 25, 0.9)',
						borderColor: 'rgba(25, 100, 25, 0.9)',
						/*hoverBackgroundColor: 'rgba(255, 0, 0, 0.1)',*/
						/*hoverBorderColor: 'rgba(255, 0, 0, 0.1)',*/
						data: light,
					},
				]
			};

			var ctx = $("#mycanvas"); 

			var mycanvas = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				options: { 
					events:[],
					animation:false,
					elements: {
						line: {
							tension: 0, // disables bezier curves
						}
					}
				}
				
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});
},1000);