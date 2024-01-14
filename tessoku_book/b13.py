def func():
    n, k = map(int, input().split())
    arr_a = list(map(int, input().split()))

    rsw = rsw_map(arr_a)
    arr_right = [0] * n
    count = 0
    j = 0
    for i in range(n):
        if (i > 0):
            arr_right[i] = arr_right[i - 1]
        else:
            arr_right[i] = 0
        while (j != n and rsw[j + 1] - rsw[i] <= k):
            j += 1
        print(i, j)
        count += j - i
    print(count)


def rsw_map(arr):
    rsw = [0]
    for i in range(len(arr)):
        rsw.append(arr[i] + rsw[i])
    return rsw


if __name__ == '__main__':
    func()
