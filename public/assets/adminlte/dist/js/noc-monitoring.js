/**
 * JIC: NOC Monitoring Custom JS
 */
 
 
$(function(){

// LOGIN PAGE
// resets the state of start shift checkbox to false when refreshed
// toggles the shift schedule dropdown
var clockIn = $(".clock-in-checkbox").find("[type='checkbox']");
$(clockIn).prop("checked", false);
$(clockIn).on("input", function(){
	if($(clockIn).is(":checked"))
		$(".shift-schedule-dropdown").removeClass("hidden");
	else
		$(".shift-schedule-dropdown").addClass("hidden");
});

// TIMESTAMP DISPLAY
// runs initially at startup and every minute after
// updates realtime by getting the seconds differential each run
if($(".timestamp-display").length){
	setTimeout(
		function setTimestampDisplay(){
			var d = new Date();
			var h = ((d.getHours() > 12) ? d.getHours() - 12 : d.getHours()).toString();
			var m = d.getMinutes().toString().padStart(2, "0");
			var a = (d.getHours() > 12) ? "PM" : "AM";
			var tString = h + ":" + m + " " + a;
			var mmArr = [
				"January", "February", "March", "April",
				"May", "June", "July", "August",
				"September", "October", "November", "December"
			];
			var mm = mmArr[d.getMonth()];
			var dd = d.getDate().toString().padStart(2, "0");;
			var yy = d.getFullYear().toString();
			var dString = mm + " " + dd + ", " + yy;

			$(".timestamp-display .time").html(tString);
			$(".timestamp-display .date").html(dString);
			
			var ms = d.getSeconds() * 1000;
			setTimeout(setTimestampDisplay, 60000 - ms);
		}, 0);
}

// BREAK MODAL

var breakStatus = -1; // -1: not started, 1: started, 0: ended

$("#break-modal").on("show.bs.modal", function(){
	breakStatus = -1;
	configureBreakModal(1,1,0,0,1,0,0,0,0,0,1);
});

$("#break-modal").on("click", ".break-selection button", function(){
	breakStatus = 1;
	configureBreakModal(0,0,1,0,0,1,1,0,1,0,0);
});

$("#break-modal").on("click", ".break-timer .end-break-button", function(){
	breakStatus = 0;
	configureBreakModal(1,0,0,1,0,1,0,1,0,1,0);
});

function configureBreakModal(...state){
	var elem = [
		$("#break-modal").find(".modal-header .close"),
		$("#break-modal").find(".modal-title .init-title"),
		$("#break-modal").find(".modal-title .start-title"),
		$("#break-modal").find(".modal-title .end-title"),
		$("#break-modal").find(".break-selection"),
		$("#break-modal").find(".break-timer"),
		
		$("#break-modal").find(".break-timer .start-label"),
		$("#break-modal").find(".break-timer .end-label"),
		
		$("#break-modal").find(".break-timer .end-break-button"),
		$("#break-modal").find(".break-timer .close-button"),
		$("#break-modal").find(".modal-footer"),
	];
	
	elem.forEach(function(el, i){
		if(state[i]) $(el).show();
		else $(el).hide();
	});
	
}

// SELECT2 bug fix for remove option toggling the selection popup display
$($(".timeclock-report-search-bar").find(".noc-select, .status-select, .schedule-select"))
.on("select2:unselect", function(e){
	if(!e.params.originalEvent) return;
	e.params.originalEvent.stopPropagation();
});













});
