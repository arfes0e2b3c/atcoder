def func():
    n, l = map(int, input().split())
    arr = list(map(int, input().split()))
    count = 0
    for i in range(n):
        if arr[i] >= l:
            count += 1
    print(count)


if __name__ == '__main__':
    func()
