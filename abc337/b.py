def func():
    s = str(input())
    s = 'A' + s
    for i in range(len(s)):
        if i == 0:
            continue
        elif s[i] == 'A':
            if s[i - 1] != 'A':
                print('No')
                return
        elif s[i] == 'B':
            if s[i - 1] != 'A' and s[i - 1] != 'B':
                print('No')
                return
    print('Yes')


if __name__ == '__main__':
    func()
