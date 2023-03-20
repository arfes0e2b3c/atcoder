"use strict";

const main = (arg) => {
  var N = BigInt(arg.trim().split(" ")[0]);
  console.log(N);
  var X = N % 998244353n;
  while (X < 0n) {
    X += 998244353n;
  }
  while (X > 998244353n) {
    X -= 998244353n;
  }
  console.log(X);
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
