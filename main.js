function f(x) {
	let exp1 = Math.tan(x);
	let exp2 = (1/3) * Math.pow(Math.tan(x), 3);
	let exp3 = (1/5) * Math.pow(Math.tan(x), 5);
	return exp1 - exp2 + exp3 - 1/3;
}

//function f(x){
//	return 2 * x - 10;
//}

let a = 0;  //parseFloat(prompt("Введите начало отрезка: "));
let b = 8;   //parseFloat(prompt("Введите конец отрезка: "));
let e = 0.0001;   //parseFloat(prompt("Введите корень: "));

let x = null;

while(Math.abs(a - b) >= e){
	x = (a + b) / 2;
	if( (f(a) * f(x)) <= 0){
		b = x;
	} else {
		a = x;
	}
}
console.log('Вычисленный корень равен = ' + x);