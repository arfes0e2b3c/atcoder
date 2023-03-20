"use strict";

const main = (arg) => {
  const X = arg.trim().split(" ")[0];
  console.log(X[X.length / 2 - (X.length % 2)]);
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
