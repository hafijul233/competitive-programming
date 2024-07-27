# Question 

There are ***3*** urns labeled ***X***, ***Y***, and ***Z***.


Urn ***X*** contains ***4*** red balls and ***3*** black balls.
Urn ***Y*** contains ***5*** red balls and ***4*** black balls.
Urn ***Z*** contains ***4*** red balls and ***4*** black balls.

One ball is drawn from each of the ***3*** urns. What is the probability that, of the ***3*** balls drawn, ***2*** are red and ***1*** is black?

## Options

1. 10 / 63
2. 2 / 7
3. 17 / 42
4. 31 / 126

## Answer

`17 / 42`

## Explaination

There are ***2*** types of ball on ***3*** Urns all possiable combinations are `2**3 = 8`. then 
|     | U1  | U2  | U3  |
| --- | --- | --- | --- |
| 1   | B   | B   | B   |
| 2   | B   | B   | R   |
| 3   | B   | R   | B   |
| 4   | `B` | `R` | `R` |
| 5   | R   | B   | B   |
| 6   | `R` | `B` | `R` |
| 7   | `R` | `R` | `B` |
| 8   | R   | R   | R   |

Cases where the combination of ***2*** red and ***1*** black are `4, 6, 7`.

 | Urn 1 | Urn 2 | Urn 3 | Total indivual probability                                             |
 | ----- | ----- | ----- | ------------------------------------------------------------- |
 | B     | R     | R     | `3/7 * 5/9 * 4/8  => (3*4*5) / (7*8*9) => 60 / 504 => 5 / 42` |
 | R     | B     | R     | `4/7 * 4/9 * 4/8 = (4*4*4) / (7*8*9) = 64 / 504 =>  8 / 63`   |
 | R     | R     | B     | `4/7 * 5/9 * 4/8 = (4*5*4) / (7*8*9) = 80 / 504 => 10 / 63`   |

Sum of all ***3*** Urns : `(5 / 42) + (8 / 63) + ( 10 / 63 ) = 51/126 = 17 / 42`.