"use strict";

const main = (arg) => {
  const input = arg.trim().split("\n");

  const H = input[0].trim().split(" ")[0];
  const W = input[0].trim().split(" ")[1];
  var Grids = input.slice(1);
  var array = JSON.parse(JSON.stringify(Grids)).map(
    (grid) => (grid = grid.split("").fill(false))
  );
  console.log(array);
  const table = {
    U: [-1, 0],
    D: [1, 0],
    L: [0, -1],
    R: [0, 1],
  };
  var x = 1;
  var y = 1;
  var num = 0;
  while (x > 0 && x <= H && y > 0 && y <= W) {
    const char = Grids[x - 1].charAt(y - 1);
    x += table[char][0];
    y += table[char][1];
    if (array[x][y]) return console.log(-1);
    array[x][y] = true;
    num++;
  }
  console.log(array[num - 2].join(" "));
};
main(require("fs").readFileSync("/dev/stdin", "utf8"));
