# Γενικές Πληροφορίες
[![Build Status](https://travis-ci.org/dimkl/ruleset.svg?branch=master)](https://travis-ci.org/dimkl/ruleset)

Δημιουργός κανόνων για φιλτράρισμα ενός χαρακτηριστικού μέσα απο επιλεγμένους κανόνες

## Μετατροπή κανόνων
* EQ 	-> equal 			-> "=*"
* GT 	-> greater than 		-> "*>"
* LT 	-> less than 			-> "*<"
* EGT   -> greater or equal than 	-> "*>="
* ELT   -> less or equal than 		-> "*<="
* BT 	-> between or equal		-> ">= * <="
* IN 	-> less or equal than 		-> "[*]"

## Ροη προγράμματος:
* select attribute to filter
* select output attribute
* create rules
	* select ruleType (e.t.c EQ)
	* set expected input values
	* set expected output values

## Integrations 
* Packagist
* Travis CI
