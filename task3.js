let array = [1, 1, 2, 3, 4, -51, 12, 12, 12, -51];

function seq(array) {
	let obj = {};
	let current = 0, next = 0;
	let equal = 0;
	
	for (let i = 0; i < array.length - 1; i++) {
		current = array[i];
		next = array[i + 1];
		if (current == next) {
			if (!obj[current]) {
				obj[current] = 2;
			} else {
				if (equal) {
					obj[current] = obj[current] + 1;
				} else {
					obj[current] = obj[current] + 2;
				}
			}
			equal++;
		} else {
			equal = 0;
		}
	}
	
	return obj;
}

console.log(seq(array));

function random(f, t) {
	let min = Math.min(f, t);
	let max = Math.max(f, t);
	
	return Math.floor(Math.random() * (max - min) + min);
}

function num(f, t, len) {
	let arr = [];
	for (let i = 0; i < len; i++) {
		let n = random(f, t);
		arr.push(n);
	}
	
	return arr;
}

let array2 = num(1, 10, 1000000);
///let array2 = num(1, 5, 10);

///console.log(seq(array2));

function seq2(array) {
	let arr = [];
	let finded = 0;	
	let previos, current;
	
	for (let i = 1; i < array.length; i++) {
		previos = array[i - 1];
		current = array[i];
		if (previos == array[i]) {
			if (!finded) {
				arr.push(previos);
				arr.push(current);
				finded++;
			} else {
				arr.push(current);
			}

		} else {
			finded = 0;
		}
	}
	
	return arr;
}

console.log(seq2(array));
/*
let date = Date.now();
///console.log(seq(array2));
seq(array2);
console.log(Date.now() - date);
date = Date.now();
///console.log(seq2(array2).sort());
///console.log(seq2(array2));
seq2(array2);
console.log(Date.now() - date);
///console.log(array2);
*/
