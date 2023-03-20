"use strict";

const main = (arg) => {
  const num = parseInt(arg.trim());
  const binNum = num.toString(2);
  var charCount = 0;
  var charNumArr = [];
  while (charCount < binNum.length) {
    const isDotColumn = binNum[charCount].indexOf("1");
    if (isDotColumn !== -1) {
      charNumArr.push(charCount);
    }
    charCount++;
  }
  var ansCount = 0;
  while (ansCount < 2 ** charNumArr.length) {
    const ansCountBin = ansCount.toString(2);
    var charCount = 0;
    var answer = 0;
    while (charCount < ansCountBin.length) {
      if (ansCountBin.slice(-(charCount + 1))[0] === "1") {
        answer +=
          2 ** (charNumArr.length - charNumArr.slice(-(charCount + 1))[0]);
      }
      charCount++;
    }
    console.log(answer);
    ansCount++;
  }
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
