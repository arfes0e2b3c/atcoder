"use strict";

const main = (arg) => {
  const A = arg.trim().split("\n")[0].split(" ");
  const B = arg.trim().split("\n")[1].split(" ");
  const C = arg.trim().split("\n")[2].split(" ");
  const D = arg.trim().split("\n")[3].split(" ");
  console.log(A, B, C, D);
  const AB = Math.sqrt((B[0] - A[0]) ** 2 + (B[1] - A[1]) ** 2);
  const BC = Math.sqrt((B[0] - C[0]) ** 2 + (B[1] - C[1]) ** 2);
  const CD = Math.sqrt((C[0] - D[0]) ** 2 + (C[1] - D[1]) ** 2);
  const DA = Math.sqrt((D[0] - A[0]) ** 2 + (D[1] - A[1]) ** 2);
  const AC = Math.sqrt((A[0] - C[0]) ** 2 + (A[1] - C[1]) ** 2);
  const BD = Math.sqrt((B[0] - D[0]) ** 2 + (B[1] - D[1]) ** 2);
  const sinA = Math.sqrt(
    1 - ((AB ** 2 + DA ** 2 - BD ** 2) / (2 * AB * DA)) ** 2
  );
  const sinB = Math.sqrt(
    1 - ((AB ** 2 + BC ** 2 - AC ** 2) / (2 * AB * BC)) ** 2
  );
  const sinC = Math.sqrt(
    1 - ((BC ** 2 + CD ** 2 - BD ** 2) / (2 * BC * CD)) ** 2
  );
  const sinD = Math.sqrt(
    1 - ((CD ** 2 + DA ** 2 - AC ** 2) / (2 * CD * DA)) ** 2
  );

  console.log(sinA, sinB, sinC, sinD);
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
