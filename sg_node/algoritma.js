function addNumber(num) {
    if(num === 1) {
        return num
    } 
    return num + addNumber(num - 1)
}
console.log(addNumber(4))

function addNumber1(num) {
    let number = num 
    for(let i = num; i > 0; i--) {
        number += i
    }
    return number - num
}
console.log(addNumber1(4))


function addNumber2(num) {
    return (num === 1) ? num : num + addNumber(num - 1)
}
console.log(addNumber2(2))