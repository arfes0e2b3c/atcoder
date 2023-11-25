def func():
    t = int(input())
    n = int(input())
    arr = [list(map(int, input().split())) for _ in range(n)]

    change_list = countChange(arr)

    rsw = countRsw(change_list)[1:t+1]

    for i in range(t):
        print(rsw[i])


def countRsw(arr):
    rsw = [0]
    for i in range(len(arr)):
        rsw.append(arr[i] + rsw[i])
    return rsw


def countChange(arr):
    change_list = [0]*500001
    for i in range(len(arr)):
        change_list[arr[i][0]] += 1
        change_list[arr[i][1]] -= 1
    return change_list


if __name__ == '__main__':
    func()
