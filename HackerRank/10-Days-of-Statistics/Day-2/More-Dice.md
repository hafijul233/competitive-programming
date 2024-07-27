# Question 

In a single toss of ***2*** fair (evenly-weighted) six-sided dice, find the probability that the values rolled by each dice will be different and the two dice have a sum of ***6***.

## Options

1. 1 / 9
2. 1 / 6
3. 2 / 3
4. 5 / 6

## Answer

`1 / 9`

## Explaination

There are total `6 * 6 = 36` outcomes.

Out of `36` posibities, following outcomes are having sum `6`. So we only count consecutive result:

| | 1 | 2 | 3 | 4 | 5 | 6 |
|-|---|---|---|---|---|---|
|1|1,1|1,2|1,3|1,4|1,5|1,6|
|2|2,1|2,2|2,3|2,4|2,5|2,6|
|3|3,1|3,2|3,3|3,4|3,5|3,6|
|4|4,1|4,2|4,3|4,4|4,5|4,6|
|5|5,1|5,2|5,3|5,4|5,5|5,6|
|6|6,1|6,2|6,3|6,4|6,5|6,6|

Total outcomes : `36`

**Condition 1:** two dices has to be different.

| | 1 | 2 | 3 | 4 | 5 | 6 |
|-|---|---|---|---|---|---|
|1|   |1,2|1,3|1,4|1,5|1,6|
|2|2,1|   |2,3|2,4|2,5|2,6|
|3|3,1|3,2|   |3,4|3,5|3,6|
|4|4,1|4,2|4,3|   |4,5|4,6|
|5|5,1|5,2|5,3|5,4|   |5,6|
|6|6,1|6,2|6,3|6,4|6,5|   |

Total outcomes : `36 - 6 = 30`

**Condition 2:** two dices sum has to be exact 6.

| | 1 | 2 | 3 | 4 | 5 | 6 |
|-|---|---|---|---|---|---|
|1|   |   |   |   |1,5|   |
|2|   |   |   |2,4|   |   |
|3|   |   |   |   |   |   |
|4|   |4,2|   |   |   |   |
|5|5,1|   |   |   |   |   |
|6|   |   |   |   |   |   |

So we are left with `30 - 26 = 4`. (outcomes having sum 6)

The answer is: `4/36 = 1/9`.