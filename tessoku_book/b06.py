def func():
    n = int(input())
    arr = list(map(int, input().split()))
    q = int(input())
    arr2 = [list(map(int, input().split())) for _ in range(q)]

    rsw = countRsw(arr)
    for i in range(q):
        l, r = arr2[i]
        if (rsw[r] - rsw[l-1] > (r - l + 1) / 2):
            print('win')
        elif (rsw[r] - rsw[l-1] == (r - l + 1) / 2):
            print('draw')
        else:
            print('lose')


def countRsw(arr):
    rsw = [0]
    for i in range(len(arr)):
        rsw.append(arr[i] + rsw[i])
    return rsw


if __name__ == '__main__':
    func()
