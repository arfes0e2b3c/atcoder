"use strict";

const main = (arg) => {
  const X = arg.trim().split("");
  var cols = [];
  cols[0] = [X[6]];
  cols[1] = [X[3]];
  cols[2] = [X[1], X[7]];
  cols[3] = [X[0], X[4]];
  cols[4] = [X[2], X[8]];
  cols[5] = [X[5]];
  cols[6] = [X[9]];
  var count = 0;
  for (var i = 0; i < 7; i++) {
    if (cols[i].every((col) => col === "0")) {
      if (count === 1) count++;
    } else {
      if (!count) {
        count++;
      } else if (count === 2) {
        count++;
      }
    }
  }

  if (X[0] === "0" && count === 3) {
    console.log("Yes");
  } else {
    console.log("No");
  }
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
