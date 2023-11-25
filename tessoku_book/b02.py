def func():
    a, b = map(int, input().split())
    for i in range(a, b+1):
        if 100 % i == 0:
            print('Yes')
            return
    print('No')


if __name__ == '__main__':
    func()
