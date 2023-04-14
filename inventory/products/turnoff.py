#!/usr/bin/python

import time
import board
import neopixel
import sys
import subprocess

# Get variable from command line. Sent from PHP.

# Setup board and reset all LEDs
num_leds = 50
pixels = neopixel.NeoPixel(board.D21, num_leds)
pixels.fill((0,0,0))

