	//commercial
	function cclick(){
		/*var cd = document.getElementById("c");
		cd.style.backgroundColor = "red";	*/
		$.ajax({
			url: "http://localhost/AP/temp&pump/src/write_appButton_db.php?value=1",
			method: "GET",
			success:function(msg){
			//	alert("Pls wait for 10seconds");
			},error: function(data) {
				console.log(data);
			}
		});	
	}
	//resdential
	function rclick(){	
		$.ajax({
			url: "http://localhost/AP/temp&pump/src/write_appButton_db.php?value=2",
			method: "GET",
			success:function(msg){
			//	alert("Pls wait for 10seconds");
			},error: function(data) {
				console.log(data);
			}
		});
	}
	//housing
	function hclick(){	
		$.ajax({
			url: "http://localhost/AP/temp&pump/src/write_appButton_db.php?value=3",
			method: "GET",
			success:function(msg){
			//	alert("Pls wait for 10seconds");
			},error: function(data) {
				console.log(data);
			}
		});	
	}
	//industrial
	function iclick(){				
		$.ajax({
			url: "http://localhost/AP/temp&pump/src/write_appButton_db.php?value=4",
			method: "GET",
			success:function(msg){
			//	alert("Pls wait for 10seconds");
			},error: function(data) {
				console.log(data);
			}
		});	
	}
	//Automatic
	function aclick(){
		var r4 = document.getElementById("r3"); 
		r4.style.display = "none"; //hides Manual on-click buttons
		$.ajax({
			url: "http://localhost/AP/temp&pump/src/write_appButton_db.php?value=5",
			method: "GET",
			success:function(msg){
			//	alert("Pls wait for 10seconds");
			},error: function(data) {
				console.log(data);
			}
		});
	}
	//Manual 
	function mclick(){
		var r4 = document.getElementById("r3");
		r4.style.display = "block";	//display Manual on-click buttons
	}	