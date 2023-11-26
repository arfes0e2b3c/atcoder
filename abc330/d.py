
def func():
    n = int(input())
    input_map = [list(map(str, input())) for _ in range(n)]
    row_map = create_row_sum(input_map)
    col_map = create_row_sum(list(zip(*input_map)))

    answer = 0
    for i in range(n):
        for j in range(n):
            if input_map[i][j] == 'o':
                answer += (row_map[i] - 1) * (col_map[j] - 1)
    print(answer)


def create_row_sum(input_map):
    row_map = []
    for i in range(len(input_map)):
        count = input_map[i].count('o')
        row_map.append(count)

    return row_map


def create_col_sum(input_map):
    col_map = []
    for i in range(len(input_map)):
        count = input_map[i].count('o')
        col_map.append(count)

    return col_map


if __name__ == '__main__':
    func()
