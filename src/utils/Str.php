<?php

namespace poniyur\utils;

class Str {

	public static function validateBrakets($str) {
		$str = preg_replace('/\s*/', '', $str);
		$bracketCounter = 0;
		for($i = 0, $iEnd = strlen($str); $i < $iEnd; $i++) {

			$char = $str[$i];
			switch ($char) {
				case '(':
					$bracketCounter++;
					break;

				case ')':
					$bracketCounter--;
					if( $bracketCounter < 0 ) return false;
					break;

				default:
					throw new InvalidArgumentException("Only brackets allowed! You use char '$char'");
					break;
			}
		}

		if( $bracketCounter === 0 ) {
			return true;
		} else {
			return false;
		}

	}

}
