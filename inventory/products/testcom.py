#!/usr/bin/python

import time
import board
import neopixel
import sys
import subprocess

# Get variable from command line. Sent from PHP.
product_location_php = sys.argv[1]
product_location = 0

# Setup board and reset all LEDs
num_leds = 50
pixels = neopixel.NeoPixel(board.D21, num_leds)
pixels.fill((0,0,0))

# Cleans up variable sent from php. converts it to a string if it is numeric. If it is not numeric, the product location can be addressed
# to a specific LED that indicates an error.
if product_location_php == int :
    product_location = product_location_php
elif product_location_php.isnumeric() == True:
    product_location = int(product_location_php)
else :
        product_location = 0

#The number 10 corresponds to LED 10 on strip and "product_location" in php script
pixels[product_location] = (255, 0, 0)

