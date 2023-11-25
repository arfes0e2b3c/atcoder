def func():
    n = int(input())
    arr = list(map(int, input().split()))
    for i in range(arr.__len__()):
        for j in range(i+1, arr.__len__()):
            for k in range(j+1, arr.__len__()):
                if arr[i] + arr[j] + arr[k] == 1000:
                    print('Yes')
                    return
    print('No')


if __name__ == '__main__':
    func()
