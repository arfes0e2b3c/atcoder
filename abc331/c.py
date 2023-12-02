def func():
    n = int(input())
    arr = list(map(int, input().split()))

    max_val = max(arr)
    sum_list = [0] * (max_val + 1)
    rsw = [0] * (max_val + 1)

    for i in range(n):
        sum_list[arr[i]] += arr[i]

    for i in range(1, max_val + 1):
        rsw[i] = rsw[i - 1] + sum_list[i]

    answer = [rsw[max_val] - rsw[arr[i]] for i in range(n)]

    print(*answer)


if __name__ == '__main__':
    func()
