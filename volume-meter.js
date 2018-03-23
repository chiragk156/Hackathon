var volumeContent = document.getElementById( "as" );
var volumeContent1 = document.getElementById( "as1" );
function createAudioMeter(audioContext,clipLevel,averaging,clipLag) {
	var processor = audioContext.createScriptProcessor(512);
	processor.onaudioprocess = volumeAudioProcess;
	processor.clipping = false;
	processor.lastClip = 0;
	processor.volume = 0;
	processor.clipLevel = clipLevel || 0.98;
	processor.averaging = averaging || 0.95;
	processor.clipLag = clipLag || 7500000;

	// this will have no effect, since we don't copy the input to the output,
	// but works around a current Chrome bug.
	processor.connect(audioContext.destination);

	processor.checkClipping =
		function(){
			if (!this.clipping)
				return false;
			if ((this.lastClip + this.clipLag) < window.performance.now())
				this.clipping = false;
			return this.clipping;
		};

	processor.shutdown =
		function(){
			this.disconnect();
			this.onaudioprocess = null;
		};

	return processor;
}
var val =0;
function volumeAudioProcess( event ) {
	var buf = event.inputBuffer.getChannelData(0);
    var bufLength = buf.length;
	var sum = 0;
    var x;

	// Do a root-mean-square on the samples: sum up the squares...
    for (var i=0; i<bufLength; i++) {
    	x = buf[i];
    	if (Math.abs(x)>=this.clipLevel) {
    		this.clipping = true;
    		this.lastClip = window.performance.now();
    	}
    	sum += x * x;
    }

    // ... then take the square root of the sum.
    var rms =  Math.sqrt(sum / bufLength);

    // Now smooth this out with the averaging factor applied
    // to the previous sample - take the max here because we
    // want "fast attack, slow release."
    this.volume = Math.max(rms, this.volume*this.averaging);
    val = this.volume*100;
    volumeContent1.textContent = val;
    //return val;
}

function func(){
var text = document.getElementById('noisetype');
var opt = text.options[text.selectedIndex];
var optgroup = opt.parentNode;
if(opt.text == "Day time")
{
	if(optgroup.label == "Industrial area")
		{
			if(val>75)
			{volumeContent.textContent = "Noise Pollution";
		console.log("found yeh!")}
		else
			volumeContent.textContent = "No Content";
		}
	else
		if(optgroup.label == "Commercial area")
		{
			if(val>65)
				{volumeContent.textContent = "Noise Pollution";
			console.log("found yeh!")}
			else
			volumeContent.textContent = "No Content";
		}
	else
		if(optgroup.label == "Residential area")
		{
			if(val>55)
				{volumeContent.textContent = "Noise Pollution";
			console.log("found yeh!")}
			else
			volumeContent.textContent = "No Content";
		}
	else
		if(optgroup.label == "Silence Zone")
		{
			console.log(val);
			if(val>50)
				{volumeContent.textContent = "Noise Pollution";
			console.log("found yeh!")}
			else
			volumeContent.textContent = "No Content";
		}
}
else
if(opt.text == "Night time")
{
	if(optgroup.label == "Industrial area")
		{
			if(val>70)
			{volumeContent.textContent = "Noise Pollution";
		console.log("found yeh!")}
		else
			volumeContent.textContent = "No Content";
		}
	else
		if(optgroup.label == "Commercial area")
		{
			if(val>55)
				{volumeContent.textContent = "Noise Pollution";
			console.log("found yeh!")}
			else
			volumeContent.textContent = "No Content";
		}
	else
		if(optgroup.label == "Residential area")
		{
			if(val>45)
				{volumeContent.textContent = "Noise Pollution";
			console.log("found yeh!")}
			else
			volumeContent.textContent = "No Content";
		}
	else
		if(optgroup.label == "Silence Zone")
		{
			if(val>40)
				{volumeContent.textContent = "Noise Pollution";
			console.log("found yeh!")}
			else
			volumeContent.textContent = "No Content";
		}
}
else
if(opt.text == "2 or 3 wheelers")
{
	if(val>80)
		{volumeContent.textContent = "Noise Pollution";
	console.log("found yeh!")}
	else
			volumeContent.textContent = "No Content";
}
else
if(opt.text == "Passenger Cars")
{
	if(val>82)
		{volumeContent.textContent = "Noise Pollution";
	console.log("found yeh!")}
	else
			volumeContent.textContent = "No Content";
}
else
if(opt.text == "Commercial Vehicles")
{
	if(val>87)
		{volumeContent.textContent = "Noise Pollution";
	console.log("found yeh!")}
	else
			volumeContent.textContent = "No Content";
}
}

setInterval(func,100);