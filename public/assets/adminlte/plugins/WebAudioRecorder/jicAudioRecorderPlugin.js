/*

[browser [userMedia]-->[mediaStream]]-->
[AudioContext [source]-->[gainNode]-->[destination]]-->
[AudioRecorder [scriptProcessor [wavProcessor]-->[resampler]]]-->
[Blob]-->[URL]

*/

$(function(){
	
	console.clear();
	
	// DOM assignments
	var plugin = $(".jic-web-audio-plugin");
	var uploader = $(plugin).find(".audio-uploader");
	var player = $(plugin).find(".audio-player");
	var recordBtn = $(plugin).find(".record-button");
	var stopBtn = $(plugin).find(".stop-button");
	var saveBtn = $(plugin).find(".save-button");
	var cancelBtn = $(plugin).find(".cancel-button");
	var deleteBtn = $(plugin).find(".delete-button");
	var filenameField = $(plugin).find(".filename-field");
	var timer = $(plugin).find(".timer");
	
	var infoTxt = $("#create-new-recording-modal .info-text");
	var infoTxtMessage = {
		"start":	"Click the button below to start recording.",
		"record":	"Recording in progress.",
		"end":		"Save your recording or discard it and record again."
	}
	
	var newAudioModal = $("#create-new-recording-modal");
	var uploadAudioModal;
	
	// initial states
	$(infoTxt).html(infoTxtMessage.start);
	$(recordBtn).show();
	$(stopBtn).hide();
	$(saveBtn).hide();
	$(cancelBtn).hide();
	$(deleteBtn).hide();
	$(player).hide();
	$(filenameField).hide();
    
	// browser and audio handler initialization
	navigator.getUserMedia = 
		navigator.getUserMedia ||
		navigator.webkitGetUserMedia ||
		navigator.mozGetUserMedia ||
		navigator.msGetUserMedia;

	var URL = window.URL || window.webkitURL;
	var audioContext = new AudioContext();
	var source = void 0;
	var gainNode = audioContext.createGain();
	var recorder = new WebAudioRecorder(gainNode,{
			workerDir:				"plugins/WebAudioRecorder/",
			numChannels: 			1,
			encoding:				"wav",
			options:{
				timeLimit:			600,
				encodeAfterRecord:	true,
				bufferSize:			4096
			}
		});
    
	// global declarations
	var runningTime = void 0;

	// listener handlers
	attachListenerToModal();
	attachListenerToRecordBtn();
	attachListenerToStopBtn();
	attachListenerToCancelBtn();
	attachListenerToDiscardBtn();
    
/*    navigator.mediaDevices.ondevicechange = function(event){
    	navigator.mediaDevices.enumerateDevices().then(function(devices){
    		console.log(devices);
    	});
    }
*/    
	
	function attachListenerToRecordBtn(){
		$(recordBtn).click(function(){
			if(navigator.getUserMedia && navigator.mediaDevices.getUserMedia){
				if(!source){
					navigator.mediaDevices.getUserMedia({audio:true})
					.then(function(stream){
						source = audioContext.createMediaStreamSource(stream);
						source.connect(gainNode);
						gainNode.connect(audioContext.destination);
						console.log("LocalMediaStream.id: " + stream.id);
						startRecording();
					})
					.catch(function(error){
						console.log(error.name + ": " + error.message);
					});
				}
				else{
					startRecording();
				}
			}
			else{
				console.log("getUserMedia is not supported on your browser.");
			}
		});
	}
	
	function startRecording(){
    	if(recorder.isRecording()){
    		console.log("Previous recording is still running.");
    		return false;
    	}

    	recorder.startRecording();
		
		$(infoTxt).html(infoTxtMessage.record);
		$(recordBtn).hide();
		$(stopBtn).show();
		$(cancelBtn).show();
		
		runningTime = window.setInterval(function(){
			if(recorder.isRecording()){
				var rt = recorder.recordingTime().toFixed();
				var mins = Math.floor(rt / 60);
				var secs = rt % 60;
				
				mins = mins > 9 ? mins : "0" + mins;
				secs = secs > 9 ? secs : "0" + secs;
				$(timer).html(mins + ":" + secs);
			}
			else{
				window.clearInterval(runningTime);
			}
		},100);
		
		console.log("Recording started.");
    }

	function attachListenerToStopBtn(){
		$(stopBtn).click(function(){
			
			recorder.finishRecording();
			
			$(infoTxt).html(infoTxtMessage.end);
			$(stopBtn).hide();
			$(cancelBtn).hide();
			$(saveBtn).show();
			$(deleteBtn).show();
			$(player).show();
			$(filenameField).show();
			
			console.log("Recording stopped.");
		});
	}
    
    // recording has completed
    recorder.onComplete = function(recorder, blob){
    	var url = URL.createObjectURL(blob);
        var fileName = "custom_file_name";
        
        $(player).attr("src",url);
        $(saveBtn).attr({
        	"href":url,
        	"download":fileName + ".wav"});
        
        console.log("URL: " + url);
    }
    
    // recording errors
    recorder.onError = function(recorder, message){
    	console.log(message);
    }
    
    function attachListenerToCancelBtn(){
        $(cancelBtn).click(function(){
        	console.log("Recording cancelled while recording.");
			resetAudioRecorder();
		});
	}
    
    function attachListenerToDiscardBtn(){
        $(deleteBtn).click(function(){
        	resetAudioRecorder();
        });
    }
    
	function resetAudioRecorder(){
		
		if(recorder.isRecording()){
			recorder.cancelRecording();
		}

		URL.revokeObjectURL($(saveBtn).attr("href"));
		
		$(infoTxt).html(infoTxtMessage.start);
		$(saveBtn).attr({"href":"#"}).removeAttr("download");
		$(recordBtn).show();
		$(cancelBtn).hide();
		$(saveBtn).hide();
		$(stopBtn).hide();
		$(deleteBtn).hide();
		$(timer).html("00:00");
		$(player).hide().removeAttr("src");
		$(filenameField).hide().find("input").val("");
		
		console.log("Recording discarded.");
	}

    function attachListenerToUploader(){
        $(uploader).change(function(){
            audioFileValidation(this.files[0]);
        });
    }

    function audioFileValidation(fileObj){
        if(!fileObj.type.includes("audio/")){
        	console.log("InvalidFileError: " + fileObj.name + " is not a valid audio file.");
            $(uploader).val("");
            return false;
        }
        else{
            $(player).attr("src", URL.createObjectURL(fileObj));
            console.log("URL: " + URL.createObjectURL(fileObj) + "\nFILE: " + fileObj.name);
            return true;
        }
    }

	function attachListenerToModal(){
		// Create New Recording Modal
		$(newAudioModal).on("hidden.bs.modal", function(){
			resetAudioRecorder();
		});
		
		// Create New Recording Modal
		$(newAudioModal).on("hidden.bs.modal", function(){
			
		});
	}


});















