//thanks to  Steve Calamia and  Travis Holliday
navigator.getUserMedia = navigator.getUserMedia ||
  navigator.webkitGetUserMedia ||
  navigator.mozGetUserMedia;
if (navigator.getUserMedia) {
  navigator.getUserMedia({
    audio: true
  },

    

  function (stream) {

    audioContext = new AudioContext();
    analyser = audioContext.createAnalyser();
    microphone = audioContext.createMediaStreamSource(stream);
    //javascriptNode = audioContext.createScriptProcessor(2048, 1, 1);

    var val = document.getElementById('range-left').innerHTML;
    javascriptNode = audioContext.createScriptProcessor(val, 1, 1);
    analyser.smoothingTimeConstant = 0.8;
    analyser.fftSize = 1024;

    microphone.connect(analyser);
    analyser.connect(javascriptNode);
    javascriptNode.connect(audioContext.destination);
    ;

    

    javascriptNode.onaudioprocess = function () {
      var array = new Uint8Array(analyser.frequencyBinCount);
      analyser.getByteFrequencyData(array);
      var values = 0;

      var length = array.length;
      for (var i = 0; i < 180; i++) {
        values += (array[i]);
      }

      var average = values / length;
      document.getElementById("circle4").style.transform = "scale(" + (average + 20) / 40 + ")";

      if (((average + 20) / 40) < 1.65) {
        navigator.vibrate(0);
        
      }
      else {
        navigator.vibrate(1000);
        
      }
    }
  },
  function (err) {
    console.log("L'erreur suivante s'est produite: " + err.name)
  });
} else {
  console.log("getUserMedia non pris en charge");
}

