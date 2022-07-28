const dicho = require('./dicho.js')

test('existe inf', () => {
    expect(dicho([1,2,3,4,5,6,7,8],1)).toBe(0)
})

test('existe sup', () => {
    expect(dicho([1,2,3,4,5,6,7,8],6)).toBe(5)
})

test('stric equal', () => {
    expect(dicho([1,2,3,4,5,6,7,8],4)).toBe(3)
})

test('out inf equal', () => {
    expect(dicho([1,2,3,4,5,6,7,8],-22)).toBe(-1)
})

test('out sup equal', () => {
    expect(dicho([1,2,3,4,5,6,7,8],227)).toBe(-1)
})