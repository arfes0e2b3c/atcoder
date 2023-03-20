"use strict";

const main = (arg) => {
  const X = arg.trim().split(" ")[0];
  if (X === "Monday") {
    console.log(5);
  }
  if (X === "Tuesday") {
    console.log(4);
  }
  if (X === "Wednesday") {
    console.log(3);
  }
  if (X === "Thursday") {
    console.log(2);
  }
  if (X === "Friday") {
    console.log(1);
  }
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
