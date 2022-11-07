<?php
class Solution {

    /**
     * @param  string $string
     * @return boolean
     * The function determine if all parenthetical characters in the string—(, ), [, ], {, }—are balanced,
     * that is, for each opening parenthesis, there is a corresponding closing parenthesis of the same form,
     * and in the reversed sequence as they were opened. Parentheses may be nested.
     */

    public static function isBalanced(string $string): bool {
        $parentheses = [
            '(' => ')',
            '[' => ']',
            '{' => '}',
        ];

        $stack = [];
        $length = strlen($string);
        for ($i = 0; $i < $length; $i++) {
            $symbol = $string[$i];
            if (isset($parentheses[$symbol])) {
                $stack[] = $symbol;
            } elseif (in_array($symbol, $parentheses, true)) {
                $parenthesis = array_pop($stack);
                if (empty($parenthesis) || $symbol !== $parentheses[$parenthesis]) {
                    return false;
                }
            }
        }

        return empty($stack);
    }

    /**
     * @param array   $array
     * @param integer $number
     * @return array
     * The function that accepts two arguments, an array of numbers and a single integer,
     * and returns an array similar to the first argument, but with all the values multiplied by the integer.
     * The input array may be nested arbitrarily deeply.
     */
    public static function multiplyArrayValues(array $array, int $number) : array {
        $processed = [];
        if (empty($array) === false) {
            foreach ($array as $value) {
                if (is_numeric($value)) {
                    $processed[] = $value * $number;
                } elseif (is_array($value)) {
                    $processed[] = self::multiplyArrayValues($value, $number);
                }
            }
        }

        return $processed;
    }
}