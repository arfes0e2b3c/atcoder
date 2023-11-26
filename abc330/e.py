def func():
    n, q = map(int, input().split())
    arr = list(map(int, input().split()))
    query_list = [list(map(int, input().split())) for _ in range(q)]

    num_count_list = [0] * (n + 1)
    for i in range(n):
        num_count_list[arr[i]] += 1

    mex = search_mex(num_count_list, 1)

    for i in range(q):
        x, y = query_list[i]
        before = arr[x - 1]
        arr[x - 1] = y
        num_count_list[before] -= 1
        num_count_list[y] += 1
        if y == mex & before == 0:
            mex = search_mex(num_count_list, mex)
        elif mex > before & before == 0:
            mex = before
        print(mex)


def search_mex(num_count_list, start):
    for i in range(start, len(num_count_list)+1):
        if num_count_list[i] == 0:
            return i


if __name__ == '__main__':
    func()
