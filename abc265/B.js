"use strict";

const main = (arg) => {
  const input = arg.trim().split("\n");

  const N = input[0].trim().split(" ")[0];
  var T = input[0].trim().split(" ")[2];

  const As = input[1].trim().split(" ");
  const XYs = input.map((XY) => XY.trim().split(" ")).slice(2);
  XYs.map((XY) => (As[XY[0] - 1] -= XY[1]));
  var rNum = 1;
  while (T > 0 && rNum != N) {
    T -= As[rNum - 1];
    rNum++;
  }
  if (T > 0) {
    console.log("Yes");
  } else {
    console.log("No");
  }
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
