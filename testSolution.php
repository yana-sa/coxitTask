<?php

//Test task #1
$string  = '()mary [had] a little (lamb)}';
$string2 = '{(mary[333]) {}had [a little (lamb)]}';
$string3 = 'mary [had] a little (lamb)}[]';

echo Solution::isBalanced($string) ? 'The string is balanced. Yay!' : 'The string is not balanced. Oops...';
echo Solution::isBalanced($string2) ? 'The string is balanced. Yay!' : 'The string is not balanced. Oops...';;
echo Solution::isBalanced($string3) ? 'The string is balanced. Yay!' : 'The string is not balanced. Oops...';;

//Test task #2
$arr  = [1, 2, [3, 4, 5], [6, [7, 8], 8, 10]];
$arr2 = [0, 77/7, [-3, [1, [55+88, [100]]], NULL, 333]];
$arr3 = ['a', (34), ['c' => 4, 'd' => 765, ['test', 555, 666, 888]]];

print_r(Solution::multiplyArrayValues($arr, 10));
print_r(Solution::multiplyArrayValues($arr2, -99));
print_r(Solution::multiplyArrayValues($arr3, 8));
