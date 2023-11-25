def func():
    n = int(input())
    strN = str(n)
    ans = 0
    for i in range(len(strN)):
        ans += int(strN[i]) * (2 ** (len(strN) - 1 - i))

    print(ans)


if __name__ == '__main__':
    func()
