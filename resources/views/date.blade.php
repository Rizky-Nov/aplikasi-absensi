<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		#idx-calendar {
		    margin: 0 auto;
		    max-width: 500px;
		    text-align: center;
		    width: 100%;
		} 
		#idx-calendar div {
			border: 2px solid blue;
			border-top: 0;
			background: ;
		}
		#idx-calendar div > ul {
		    list-style: none ;
		    background-color: transparent;
		    margin: 0;
		    padding: 0 10px;
		}
		#idx-calendar #dayNames > ul {
		    background-color: transparent;
		}
		#idx-calendar ul li {
		    color: #000;
		    float: left;
		    font-family: 'Inter';
		    font-weight: inherit;
		}
		#dayNames ul li {
		    font-weight: bold;
		    margin: 2% 0;
		    padding: 3% 0;
		    width: 14.2857%;
		}
		#daysNum ul li:hover {
		    background-color: #E0E0E0;
		    border-radius: 20px;
		    color: #000;
		    transition: .2s;
		}
		#daysNum ul li {
		    padding: 2.5% 0;
		    width: 14.2857%;
		    transition: .2s;
		    border-radius: 2px;
		    cursor: default;
		}
		#dayNames,#daysNum {
		    clear: both;
		    width: 100%;
		}
		#dayNames:after,#daysNum:after,#idx-calendar div > ul:after  {
		    content: "";
		    display: table;
		    clear: both;
		}
		#idx-calendar div > ul li:first-child {
		    color: #F05558;
		    font-weight: bold;
		}
		#idx-calendar li.dayNow {
		    color: #0084B4 !important;
		    font-weight: bold;
		    background-color: li;
		    position: relative;
		    z-index: 2;
		}
		#monthNow {
		    background-color: transparent;
		    padding: 20px;
		    text-transform: uppercase;
		}
		#calendar-control {
		    position: relative;
		    background: transparent;
		}
		#nextMonth, #prevMonth {
		    transition:0.5s;
		    background-color: transparent;
		    font-family: 'Inter';
		    height: 100%;
		    position: absolute;
		    right: 0;
		    text-transform: uppercase;
		    top: 0;
		    width: 60px;
		}
		#prevMonth{
		    left: 0;
		}
		#prevMonth:before{
		    transform: rotate(-135deg);
		}
		#nextMonth:hover, #prevMonth:hover{
		    background-color: #E0E0E0;
		}
		#nextMonth:hover:before, #prevMonth:hover:before{
		    border-radius: 0%;
		}
	</style>

</head>
<body>
	<div class="col-3">
		<div id="idx-calendar">
			<div id="calendar-control" class="border-0">
			  	<div id="monthNow" class="border-0 text-l-medium">Januari 2014</div>
			  	<div id="nextMonth" class="d-flex align-items-center justify-content-center border-0">
			  		<i class="fa fa-chevron-right"></i>
			  	</div>
			  	<div id="prevMonth" class="d-flex align-items-center justify-content-center border-0">
			  		<i class="fa fa-chevron-left"></i>
			  	</div>
		 	</div>
		 	<div id="dayNames" class="border border-bottom-0 rounded-top text-m-medium">
			  	<ul>
				   <li>Su</li>
				   <li>Mo</li>
				   <li>Tu</li>
				   <li>We</li>
				   <li>Th</li>
				   <li>Fr</li>
				   <li>Sa</li>
			  	</ul>
			</div>
			<div id="daysNum" class="border border-top-0 rounded-bottom text-m-regular">
		 	</div>
		</div>
	</div>

	<script>
		function displayCalendar(month, year){          
			var monthNow = new Date().getMonth();    
			var yearNow = new Date().getFullYear();    
			var nextMonth = month+1;    
			var prevMonth = month-1;    
			var day = 0;        

			if((month == monthNow)&&(year == yearNow)){        
				var day = new Date().getDate();    
			}        
				var htmlContent ="";    
				var FebNumberOfDays ="";    
				var counter = 1;    
				var Nameday = 1;        
				if (month == 1){        
					if ( (year%100!=0) && (year%4==0) || (year%400==0)){            
						FebNumberOfDays = 29;            
					}else{            
						FebNumberOfDays = 28;        
					}    
				}        
				
				var monthNames = [
					"January",
					"February",
					"March",
					"April",
					"May",
					"June",
					"July",
					"August",
					"September",
					"October",
					"November", 
					"December"
				];    
				
				var monthNum = ["1","2","3","4","5","6","7","8","9","10","11", "12"];    
				var dayNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];    
				var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"]   
				var nextDate = new Date(nextMonth +' 1 ,'+year);    
				var weekdays = nextDate.getDay();    
				var weekdays2 = weekdays    
				var numOfDays = dayPerMonth[month];                                        
				
				while (weekdays>0){    
					htmlContent += "<li style='padding:1 0 0;'></li>";        
					weekdays--;    
				}        
					
				while (counter <= numOfDays){                
					if (weekdays2 > 6){            
						weekdays2 = 0;            
						htmlContent += "</ul><ul>";        
						}        
						
						if (counter == day){            
							htmlContent +="<li class='dayNow'>"+counter+"</li>";            
							Nameday = counter;            
						}else{            
							htmlContent +="<li>"+counter+"</li>";        
						}        
						
						weekdays2++;        
						counter++;    
					}        
					document.getElementById("monthNow").innerHTML= monthNames[month]+" "+ year ;    
					document.getElementById("daysNum").innerHTML= "<ul id="+monthNum[month]+" class="+year+">"+htmlContent+"</ul>"; 
				} 
				
				(function() {    
					var dateNow = new Date();   
					var month = dateNow.getMonth();    
					var year = dateNow.getFullYear();    
					displayCalendar(month,year) 
				})
				
				(window); 
				document.getElementById("nextMonth").onclick = function(){    
					var idmonth = document.getElementById("daysNum");    
					var month = idmonth.getElementsByTagName("ul")[0].id;    
					var nextYear = idmonth.getElementsByTagName("ul")[0].className;    
					var nextMonth = Number(month);    if(nextMonth == 12){        
						nextMonth = 0;        nextYear = Number(nextYear) + 1    
					}    displayCalendar(nextMonth,nextYear); 
				} 
				
				document.getElementById("prevMonth").onclick = function(){    
					var idmonth = document.getElementById("daysNum");    
					var month = idmonth.getElementsByTagName("ul")[0].id;    
					var prevYear = idmonth.getElementsByTagName("ul")[0].className;    
					var prevMonth = Number(month) - 2;    
					if(prevMonth < 0 ){        
						prevMonth = 11;            
						prevYear = Number(prevYear) - 1    
					}    
					
					displayCalendar(prevMonth,prevYear); }
	</script>
</body>
</html>