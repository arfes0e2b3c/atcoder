"use strict";

const main = (arg) => {
  const X = arg.trim().split(" ");
  const a = X[0];
  const b = X[1];
  const c = X[2];
  const d = X[3];
  console.log((a + b) * (c - d));
  console.log("takahashi");
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
