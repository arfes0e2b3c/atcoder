def func():
    n = int(input())
    arr = map(int, input().split())
    arr = [str(x) for x in arr]
    arr_swap = {v: str(k + 1) for k, v in enumerate(arr)}
    answer = []
    tmp = '-1'
    for i in range(n):
        tmp = arr_swap[tmp]
        answer.append(tmp)
    print(*answer)


if __name__ == '__main__':
    func()
