import numpy as np


def func():
    n, p = map(int, input().split())
    grid = [list(input()) for _ in range(n)]

    repeated_grid = np.tile(grid, (2, 2))

    rsw = [[0] * n] * n
    for i in range(n):
        for j in range(n):
            rsw[i][j] = rsw[i - 1][j] + rsw[i][j - 1] - \
                rsw[i - 1][j - 1] + (1 if grid[i][j] == 'B' else 0)
    total_count = rsw[n-1][n-1]
    print(rsw)

    rsw_repeated = [[0] * (2 * n)] * (2 * n)
    for i in range(2 * n):
        for j in range(2 * n):
            rsw_repeated[i][j] = rsw_repeated[i - 1][j] + rsw_repeated[i][j - 1] - \
                rsw_repeated[i - 1][j - 1] + \
                (1 if repeated_grid[i][j] == 'B' else 0)

    for i in range(p):
        y1, x1, y2, x2 = list(map(int, input().split()))
        count = 0
        top_y_append = n - y1 % n
        left_x_append = n - x1 % n
        bottom_y_append = y2 % n
        right_x_append = x2 % n

        center_count_x = (x2 - x1 - left_x_append - right_x_append) / \
            n > 0 if (x2 - x1 - left_x_append - right_x_append) / n else 0
        center_count_y = (y2 - y1 - top_y_append - bottom_y_append) / \
            n > 0 if (y2 - y1 - top_y_append - bottom_y_append) / n else 0
        count += total_count * center_count_x * center_count_y

        top_rsw_edge = total_count - rsw[y1 - 1][n - 1]
        count += top_rsw_edge * center_count_y

        left_rsw_edge = total_count - rsw[n - 1][x1 - 1]
        count += left_rsw_edge * center_count_x

        bottom_rsw_edge = rsw[y2][n - 1]
        count += bottom_rsw_edge * center_count_y

        right_rsw_edge = rsw[n - 1][x2]
        count += right_rsw_edge * center_count_x

        last_x = x2 - n * center_count_x
        last_y = y2 - n * center_count_y

        count += rsw_repeated[last_y][last_x] - rsw_repeated[last_y][x1 - 1] - \
            rsw_repeated[y1 - 1][last_x] + rsw_repeated[y1 - 1][x1 - 1]

        print(count)


if __name__ == '__main__':
    func()
