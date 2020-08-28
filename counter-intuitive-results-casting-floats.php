<?php

echo (int) ( (0.1 + 0.7) * 10 ); // 7 - expected to give 8 but 7 is given.
/** but in fact the internal floating-point //representation is just slightly less than 8
// When PHP converts a floating point number to integer it rounds toward zero, so it
//becomes 7.

 * The reason behind this is that some numbers are rational in base 10 but are irrational
in base 2. Although 0.7 can be expressed as a rational number in base 10, when expressed
in base 2 it is irrational. Because there are a limited number of bits available to store the
number, it is inevitable that some loss of precision will occur
 *
 *
 * **/


echo (int) ((0.1 + 0.5) * 10); // 6
