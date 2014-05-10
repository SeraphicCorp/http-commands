<?php

class Onkyo implements iModule {

    private $commands = array(
        'start' => '15:44:6D',
        'start-on-vcr-dvr' => '15:44:6A:02',
        'select-vcr-dvr' => '15:44:69:02',
        'stop' => '15:44:69:02'
//15:45 - At end of each button press command to prevent repeated keypresses
//15:44:01 - Up / Tuner Freq Up
//15:44:02 - Down / Tuner Freq Down
//15:44:03 - Left
//15:44:04 - Right
//15:44:0A - Setup Menu
//15:44:0D - Exit
//15:44:2B - Enter
//15:44:33 - Sound Field Toggle
//15:44:34 - Source Inputs Toggle
//15:44:35 - Audio & Video Information OSD
//15:44:41 - Volume Up
//15:44:42 - Volume Down
//15:44:43 - Mute Toggle
//15:44:65 - Mute
//15:44:66 - Un-Mute
//15:44:69:01 - BD/DVD select
//15:44:69:02 - VCR/DVR select
//15:44:69:03 - CBL/SAT select
//15:44:69:04 - GAME select
//15:44:69:05 - AUX select
//15:44:69:06 - TUNER select
//15:44:69:07 - TV/CD select
//15:44:69:08 - PORT select
//15:44:6A:01 - BD/DVD + power
//15:44:6A:02 - VCR/DVR + power
//15:44:6A:03 - CBL/SAT + power
//15:44:6A:04 - GAME + power
//15:44:6A:05 - AUX + power
//15:44:6A:06 - TUNER + power
//15:44:6A:07 - TV/CD + power
//15:44:6A:08 - PORT + power
//15:44:6B - Amp Power Toggle
//15:44:6C - Amp Off
//15:44:6D - Amp On
    );

    public function execute($command) {
        if (!array_key_exists($command, $this->commands)) {
            die("Unknown command " + $command);
        }
        exec("echo 'tx " + $this->commands[$command] + "' | cec-client -s -d 1");
    }

}
