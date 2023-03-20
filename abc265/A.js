"use strict";

const main = (arg) => {
  const X = arg.trim().split(" ")[0];
  const Y = arg.trim().split(" ")[1];
  const N = arg.trim().split(" ")[2];
  if (3 * X > Y) {
    console.log(Y * ((N - (N % 3)) / 3) + X * (N % 3));
  } else {
    console.log(X * N);
  }
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
