"use strict";

const main = (arg) => {
  const recArr = arg.trim().split("\n");

  var isSharpCol = [];
  var isSharpRow = [];

  var colCount = 0;
  while (colCount < 10) {
    const isDotColumn = recArr[colCount].indexOf("#");
    if (isDotColumn !== -1) {
      var charCount = 0;
      while (charCount < 10) {
        const isSharp = recArr[colCount][charCount].match("#");
        if (isSharp) {
          isSharpRow.push(charCount);
        }
        charCount++;
      }
      isSharpCol.push(colCount);
    }
    colCount++;
  }
  const a = Math.min(...isSharpCol) + 1;
  const b = Math.max(...isSharpCol) + 1;
  const c = Math.min(...isSharpRow) + 1;
  const d = Math.max(...isSharpRow) + 1;
  console.log(a + " " + b + "\n" + c + " " + d);
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
