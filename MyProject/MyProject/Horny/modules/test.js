//creat sugesstion search
	$(document).ajaxStart(function() {
		$("#glass").css("display", "none");
		$("#loading-icon").css("display", "block");
		

	});

	$(document).ajaxComplete(function() {
		setTimeout( function(){
			$("#glass").css("display", "block");
			$("#loading-icon").css("display", "none");
			
		}, 700);
		

	});

function debounce(func, wait) {
  return function() {
    var context = this,
        args = arguments;

    var executeFunction = function() {
      func.apply(context, args);
    }

    setTimeout(executeFunction, wait);
  }
}


	function getData(){
		var items=[];
		$.ajax({
			url : 't.json',
			datatype : 'json',

			success: function(data){
				$.each(data, function(key, val) {
				 items.push(val);
				});
			}
		})
		return items;
	}		

	var handleKey = debounce(function(){
		if($("#search").length > 0){
					$( "#search").keydown(function(){
					var values = getData();
					$( "#search" ).autocomplete({  // #search is the id of the input element 

      				source: values //source: values is the list of available values*/ 
				});
    		});
		}
	} ,500);

	$("#search").keydown(handleKey);

// detect mobile
var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		// element desktop version
		var element_dt = document.getElementById("desktop-version");
		var element_p = document.getElementById("page");
		var element_adv_dt = document.getElementById("adv-dt");
		var element_sm_dt = document.getElementById("second-menu-dt");
		var element_bm_dt = document.getElementById("bannermenu-dt");
		var element_action_dt = document.getElementById("action-dt");
		var element_dp_dt = document.getElementById("displayproduct-dt"); 
		var element_saleinfo_dt = document.getElementById("saleinfo-dt");
		var element_onsaleinfo_dt = document.getElementById("onsaleinfo-dt");
		var element_sis_dt = document.getElementById("sis-dt");
		var element_ws_dt = document.getElementById("ws-dt");
		var element_fb_dt = document.getElementById("fb-dt");
		var element_footer_dt = document.getElementById("footer-dt");
		// element mobile version
		var element_action_mb = document.getElementById("action-mb");
		var element_sm_mb = document.getElementById("second-menu-mb");
		var element_mb = document.getElementById("mobile-version");
		var element_wbfu_mb = document.getElementById("wbfu-mb");
		var element_pc_mb = document.getElementById("pc-mb");
		var element_customer_mb = document.getElementById("customer-mb");
		var element_select_mb = document.getElementById("select-mb");
		var element_signup_mb = document.getElementById("signup-mb");
		var element_footer_mb = document.getElementById("footer-mb");
		if (isMobile) {
			// remove element desktop when display mobile screen
  			element_p.removeChild(element_dt);
  			element_p.removeChild(element_adv_dt);
  			element_p.removeChild(element_sm_dt);
			element_p.removeChild(element_bm_dt);
			element_p.removeChild(element_action_dt);
			element_p.removeChild(element_dp_dt);
			element_p.removeChild(element_saleinfo_dt);
			element_p.removeChild(element_onsaleinfo_dt);
			element_p.removeChild(element_sis_dt);
			element_p.removeChild(element_ws_dt);
			element_p.removeChild(element_fb_dt);
			element_p.removeChild(element_footer_dt);


		} 

		else {
			// remove element mobile when display desktop screen

			element_p.removeChild(element_sm_mb);
			element_p.removeChild(element_mb);
			element_p.removeChild(element_action_mb);
			element_p.removeChild(element_wbfu_mb);
			element_p.removeChild(element_pc_mb);
			element_p.removeChild(element_customer_mb);
			element_p.removeChild(element_select_mb);
			element_p.removeChild(element_signup_mb);
			element_p.removeChild(element_footer_mb);
			
		}  


// creat countdownt timer

var countdowntTime = new Date("Feb 27 , 2020 23:59:00").getTime();

var x = setInterval(function(){
	var timeNow = new Date().getTime(); 
	var distance = countdowntTime - timeNow;


    var hours = ( Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)) ) + (Math.floor(distance / (1000 * 60 * 60 * 24)) * 24);
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("hour").innerHTML = hours;
    document.getElementById("minute").innerHTML = minutes;
    document.getElementById("second").innerHTML = seconds;
    
   	if(distance < 0 ){
   		clearInterval(x);
   		document.getElementById("timesale").innerHTML = "END SALE";
   	}

}, 1000);

