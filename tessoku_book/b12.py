import bisect


def func():
    n = int(input())
    print(check_ans(n))


def check_ans(n):
    left = 0
    right = 50
    while (True):
        mid = (left + right) / 2
        diff = calc_diff(n, mid)
        if (abs(diff) < 0.001):
            return mid
        elif (diff < 0):
            left = mid
        else:
            right = mid


def calc_diff(n, mid):
    return pow(mid, 3) + mid - n


if __name__ == '__main__':
    func()
