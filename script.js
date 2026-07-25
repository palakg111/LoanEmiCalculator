function calculateEMI(){

    let P = parseFloat(document.getElementById("amount").value);
    let annualRate = parseFloat(document.getElementById("rate").value);
    let years = parseInt(document.getElementById("years").value);

    let monthlyRate = annualRate / 12 / 100;

    let months = years * 12;

    let emi =
    (P * monthlyRate * Math.pow(1 + monthlyRate, months)) /
    (Math.pow(1 + monthlyRate, months) - 1);

    let totalPayment = emi * months;

    let totalInterest = totalPayment - P;

    document.getElementById("emi").innerHTML =
    emi.toFixed(2);

    document.getElementById("payment").innerHTML =
    totalPayment.toFixed(2);

    document.getElementById("interest").innerHTML =
    totalInterest.toFixed(2);
}