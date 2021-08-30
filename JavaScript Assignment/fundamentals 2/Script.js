//function assignment challenge 
const calAverage = (a, b, c) => (a + b + c) / 3;
console.log(calAverage(2, 4, 6));

let sDolphins = calAverage(85, 54, 41);
let sKoalas = calAverage(23, 34, 27);

const cWinner = function (avgdol, avgkoal) {
    if (avgdol >= 2 * avgkoal) {
        console.log(`Dolphins win (${avgdol} vs. ${avgkoal})`);
    } else if (avgkoal >= 2 * avgdol) {
        console.log(`Koals win (${avgkoal} vs. ${avgdol})`);
    } else {
        console.log('no team win');
    }
}
console.log(sDolphins, sKoalas);
cWinner(sDolphins, sKoalas);

//basic array operation

const tipCal = function (bill) {
    return bill >= 50 && bill <= 300 ? bill * 0.15 : bill * 0.2;
}

const bills = [250, 652, 410];
const tips = [tipCal(bills[0]), tipCal(bills[1]), tipCal(bills[2])];
const totals = [bills[0] + tips[0], bills[1] + tips[1], bills[2] + tips[2]];

console.log(bills, tips, totals);

// object challenges

const marks = {
    full_name: 'Mark Miller',
    mass: 78,
    heigth: 1.69,
    calBMI: function () {
        this.bmi = this.mass / this.heigth ** 2;
        return this.bmi;
    }
};

const john = {
    full_name: 'John Smith',
    mass: 92,
    heigth: 1.95,
    calBMI: function () {
        this.bmi = this.mass / this.heigth ** 2;
        return this.bmi;
    }
};

marks.calBMI();
john.calBMI();

console.log(marks.bmi, john.bmi);

if (marks.bmi > john.bmi) {
    console.log(`${marks.full_name}'s BMI (${marks.bmi}) is higher than ${john.full_name}'s BMI (${john.bmi})`);

} else if (john.bmi > marks.bmi) {
    console.log(`${john.full_name}'s BMI (${john.bmi}) is higher than ${marks.full_name}'s BMI (${marks.bmi})`);

}

