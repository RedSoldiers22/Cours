const mysum = require('./mysum');

test('il faut que 1 + 2 soit égal à 3', () =>{
    expect(mysum(1,2)).toBe(3)
})