def func():
    n = int(input())
    points = [list(map(int, input().split())) for _ in range(n)]
    point_map = [[0 for _ in range(2000)] for _ in range(2000)]

    for i in range(n):
        point_map[points[i][0]+1][points[i][1]+1] += 1
        point_map[points[i][0]+1][points[i][3]+1] -= 1
        point_map[points[i][2]+1][points[i][3]+1] += 1
        point_map[points[i][2]+1][points[i][1]+1] -= 1

    rsw_map = create_rsw_map(point_map)

    count = 0

    for i in range(2000):
        for j in range(2000):
            if (rsw_map[i][j] > 0):
                count += 1
    print(count)


def create_rsw_map(point_map):
    rsw_map = [[0 for _ in range(2000)] for _ in range(2000)]
    for i in range(1, 2000):
        for j in range(1, 2000):
            rsw_map[i][j] = rsw_map[i][j-1] + point_map[i][j]
    for i in range(1, 2000):
        for j in range(1, 2000):
            rsw_map[i][j] = rsw_map[i-1][j] + rsw_map[i][j]
    return rsw_map


if __name__ == '__main__':
    func()
