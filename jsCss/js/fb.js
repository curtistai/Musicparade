/* --------

		  Config override: This demo uses shiny flash 9 stuff, overwriting Flash 8-based defaults
		  Alternate PP_CONFIG object must be defined before soundManager.onready()/onload() fire.
		  Alternately, edit the config in page-player.js to simply use the values below by default

		-------- */

		// demo only, but you can use these settings too..
		soundManager.setup({
		  flashVersion: 9,
		  preferFlash: true, // for visualization effects
		  useHighPerformance: true, // keep flash on screen, boost performance
		  wmode: 'transparent', // transparent SWF, if possible
		  url: 'soundmanager/swf/'
		});

		// custom page player configuration

		var PP_CONFIG = {
		  autoStart: false,      // begin playing first sound when page loads
		  playNext: true,        // stop after one sound, or play through list until end
		  useThrottling: false,  // try to rate-limit potentially-expensive calls (eg. dragging position around)</span>
		  usePeakData: true,     // [Flash 9 only] whether or not to show peak data (left/right channel values) - nor noticable on CPU
		  useWaveformData: false,// [Flash 9 only] show raw waveform data - WARNING: LIKELY VERY CPU-HEAVY
		  useEQData: false,      // [Flash 9 only] show EQ (frequency spectrum) data
		  useFavIcon: false     // try to apply peakData to address bar (Firefox + Opera) - performance note: appears to make Firefox 3 do some temporary, heavy disk access/swapping/garbage collection at first(?) - may be too heavy on CPU
		}