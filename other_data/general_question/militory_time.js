function timeConversion(s) {
    const split = s.split(":");
    let hourNumber = Number(split[0]);
    const minuteNumber = split[1];
    let lastPart = split[2];
    const amPm = lastPart.slice(-2);
    const second = lastPart.slice(0, -2);

    if (amPm === "PM") {
        if (hourNumber === 12) {
            hourNumber =hourNumber;
        } else {
            hourNumber += 12;
        }
    } else if (amPm === "AM") {
        if (hourNumber === 12) {
            hourNumber = `0${0}`;
        } else if (hourNumber < 10) {
            hourNumber = `0${hourNumber}`;
        } else {
            hourNumber = `${hourNumber}`
        }
    } 

    return `${hourNumber}:${minuteNumber}:${second}`;
}

// Example usage:
const militaryTime = timeConversion("02:01:05PM");
console.log("Military Time:", militaryTime);
