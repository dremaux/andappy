
navigator.getUserMedia = navigator.getUserMedia ||
  navigator.webkitGetUserMedia ||
  navigator.mozGetUserMedia;
  
if (navigator.getUserMedia) {
  navigator.getUserMedia({
      audio: true
    },
    function(stream) {
      audioContext = new AudioContext();
      analyser = audioContext.createAnalyser();
    microphone = audioContext.createMediaStreamSource(stream);
      javascriptNode = audioContext.createScriptProcessor(2048, 1, 1);
      analyser.smoothingTimeConstant = 0.8;
      analyser.fftSize = 1024;

      microphone.connect(analyser);
      analyser.connect(javascriptNode);
      javascriptNode.connect(audioContext.destination);
;     
      tour = 0;
      javascriptNode.onaudioprocess = function() {
          var array = new Uint8Array(analyser.frequencyBinCount);
          analyser.getByteFrequencyData(array);
          var values = 0;
          
          var length = array.length;
          for (var i = 0; i < 100; i++) {
            values += (array[i]);
          }

          var average = values / length;
        document.getElementById("circle").style.transform="scale("+(average+30)/40+")";

        scale = document.getElementById("circle").style.transform=(average+30)/40;
        document.getElementById('test').innerHTML = scale;
                
        console.log("les tour: "+ tour);

        if(scale >= 1.4 && tour > 200){
          document.getElementById("myCheck").click();
          tour = 0;
        }else{
          tour = tour + 1;
        }

        }
    },

    function(err) {
      console.log("L'erreur suivante s'est produite : " + err.name)
    });
} else {
  console.log("getUserMedia non pris en charge");
}
