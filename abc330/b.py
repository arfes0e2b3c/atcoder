def func():
    n, l, r = map(int, input().split())
    arr = list(map(int, input().split()))
    answer = []
    for i in range(n):
        if (l <= arr[i] & arr[i] <= r):
            answer.append(str(arr[i]))
        elif (arr[i] < l):
            answer.append(str(l))
        else:
            answer.append(str(r))
    print(' '.join(answer))


if __name__ == '__main__':
    func()
