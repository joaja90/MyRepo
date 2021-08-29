
//Cpr-nr. indtastes efter "const cpr"

const cpr = '1801882180';


if(cpr.length == 10) {
    console.log('Det indtastede CPR-nr på 10 cifre er korrekt')
}
else if (cpr.length == 11 || cpr.includes('-')) {
        console.log('Det indtastede CPR-nr på 11 cifre korrekt')
}
else if (cpr.length <= 9) {
    console.log('CPR-nr. indeholder for få cifre. Indtast dit CPR-nr med eller uden bindestreg efter din fødselsdato')
}
else if (cpr.length >= 11 ) {
    console.log('CPR-nr. skal være på 10 cifre, eller 11 cifre hvis du bruger bindestreg')
}