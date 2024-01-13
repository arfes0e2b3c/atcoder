import bisect


def func():
    n = int(input())
    arr_a = list(map(int, input().split()))
    q = int(input())
    arr_x = [int(input()) for _ in range(q)]

    sorted_arr_a = sorted(arr_a)

    for i in range(q):
        print(count_less_than_x_by_binary_search(sorted_arr_a, arr_x[i]))


def count_less_than_x_by_binary_search(sorted_arr_a, x):
    left = 0
    right = len(sorted_arr_a)
    while right > left:
        mid = (left + right) // 2
        if (sorted_arr_a[mid] < x):
            left = mid + 1
        else:
            right = mid
    return left


if __name__ == '__main__':
    func()
