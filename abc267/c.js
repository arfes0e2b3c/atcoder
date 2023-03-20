"use strict";

const main = (arg) => {
  const N = arg.trim().split("\n")[0].split(" ")[0];
  const M = arg.trim().split("\n")[0].split(" ")[1];
  var A = arg.trim().split("\n")[1].split(" ");
  var maxS = [];
  for (var i = 0; i < N - M + 1; i++) {
    var SB = 0;
    const B = A.slice(i, i + M);
    for (var j = 0; j < M; j++) {
      SB += (j + 1) * B[j];
    }
    maxS.push(SB);
  }
  console.log();
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
