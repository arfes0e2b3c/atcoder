def func():
    n = int(input())
    points = [list(map(int, input().split())) for _ in range(n)]
    print(points)
    q = int(input())
    ranges = [list(map(int, input().split())) for _ in range(q)]

    point_map = create_point_map(points)
    print([rsw[:5] for rsw in point_map[:5]])

    rsw_map = create_rsw_map(point_map)

    # print([rsw[:5] for rsw in rsw_map[:5]])

    for i in range(q):
        x1, y1, x2, y2 = ranges[i]
        print(rsw_map[x2][y2] - rsw_map[x1-1][y2] -
              rsw_map[x2][y1-1] + rsw_map[x1-1][y1-1])


def create_point_map(points):
    point_map = [[0]*1500]*1500
    for i in range(len(points)):
        print(points[i][0], points[i][1])
        point_map[points[i][0]][points[i][1]] = 1
    return point_map


def create_rsw_map(point_map):
    rsw_map = [[0]*1500]*1500
    for i in range(1, 1500):
        for j in range(1, 1500):
            rsw_map[i][j] = rsw_map[i][j-1] + point_map[i][j]
    for i in range(1, 1500):
        for j in range(1, 1500):
            rsw_map[i][j] = rsw_map[i-1][j] + point_map[i][j]
    return rsw_map


if __name__ == '__main__':
    func()
