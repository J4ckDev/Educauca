window.onload = function () {
 
    var recognition = new webkitSpeechRecognition();
    recognition.continuous = true;
    recognition.interimResults = true;
    recognition.lang = "es";

    mic.addEventListener('click', function () {
        if (document.getElementById('mic').getAttribute('class')=='mx-auto listen') {
            areaResult.focus();
            recognition.start();
            document.getElementById('mic').setAttribute('class','');
            document.getElementById('mic').setAttribute('class','mx-auto listening');
            document.getElementById('micro').setAttribute('class','');
            document.getElementById('micro').setAttribute('class','fas fa-microphone-slash');
        } else {
            document.getElementById('mic').setAttribute('class','');
            document.getElementById('mic').setAttribute('class','mx-auto stop');
            document.getElementById('micro').setAttribute('class','');
            document.getElementById('micro').setAttribute('class','fas fa-microphone');
        }
        //areaResult.focus();
        //recognition.start();
        
    });

    //events

    recognition.onaudiostart = function (event) {
        console.log("onaudiostart");
    };

    recognition.onsoundstart = function (event) {
        console.log("onsoundstart");
    };

    recognition.onspeechstart = function (event) {
        console.log("onspeechstart");
    };

    recognition.onspeechend = function (event) {
        console.log("onspeechend");
    };

    recognition.onsoundend = function (event) {
        console.log("onsoundend");

    };

    recognition.onaudioend = function (event) {
        console.log("onaudioend");

    };

    recognition.onresult = function (event) {
        console.log("onresult");
        var interimResult = '',
            finalResult = '';
        for (var i = event.resultIndex; i < event.results.length; ++i) {
            if (event.results[i].isFinal) {
                finalResult = event.results[i][0].transcript;
            } else {
                interimResult += event.results[i][0].transcript;
            }
        }
        
        //finalTranscript.value = finalResult;
        areaResult.value = interimResult;

        //if (interimResult.indexOf('terminar') != -1)
        //    recognition.stop();
        if (document.getElementById('mic').getAttribute('class')=='stop') {
            recognition.stop();
            document.getElementById('mic').setAttribute('class','');
            document.getElementById('mic').setAttribute('class','listen');
        }            
    };

    recognition.onnomatch = function (event) {
        console.log("onnomatch");
    };

    recognition.onerror = function (event) {
        console.log("onerror: " + event);

    };

    recognition.onstart = function (event) {
        console.log("onstart");
    };

    recognition.onend = function (event) {
        console.log("onend");
    };

};