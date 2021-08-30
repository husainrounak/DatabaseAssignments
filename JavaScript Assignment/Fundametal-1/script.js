// value and variable
/* 1. Declare variables called 'country', 'continent' and 'population' and assign their values according to your own country (population in millions)
2. Log their values to the consol*/
let country = 'India';
let continent = 'Asia';
let population = 1391.99;

console.log("country = " + country, " continent = " + continent, " population = " + population);
document.write("country = " + country, " continent = " + continent, " population = " + population);

// Datatypes
/*1. Declare a variable called 'isIsland' and set its value according to your country. The variable should hold a Boolean value. Also declare a variable 'language', but don't assign it any value yet 
2. Log the types of 'isIsland', 'population', 'country' and 'language' to the console*/
let isIsland = false;
let language;

console.log(typeof isIsland);
console.log(typeof population);
console.log(typeof country);
console.log(typeof language);

// Basic Operators

// math operators
const num1 = 10;
const num2 = 5;
console.log("Addition of two number" + (num1 + num2));
console.log("Substraction of two number" + (num1 - num2));
console.log("Multiplication of two number" + (num1 * num2));
console.log("Division of two number" + (num1 / num2));

// Assignment operators
let firstName = "Husain";
let n = 10;
n += 5;// n = n+5
console.log(n);
n -= 2; // n = n-2
console.log(n);
n++;// increment the value of n by 1 (n = n+1)
console.log(n);
n--;// decrement the value of n by 1 (n = n-1)
console.log(n);

// Comparison operators
const eligible = 18;
let myAge = 25;
console.log(myAge > eligible)//compare 25 is greaterthan 18 or not return true is condition is correct
console.log(myAge == eligible)// compare 25 is equal to 18 or not return false

// some other operators are <,>=,<=